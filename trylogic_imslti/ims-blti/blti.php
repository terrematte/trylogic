<?php

require_once 'OAuth.php';

// Returns true if this is a Basic LTI message
// with minimum values to meet the protocol
function is_basic_lti_request() {
   $good_message_type = $_REQUEST["lti_message_type"] == "basic-lti-launch-request";
   $good_lti_version = $_REQUEST["lti_version"] == "LTI-1p0";
   $resource_link_id = $_REQUEST["resource_link_id"];
   if ($good_message_type and $good_lti_version and isset($resource_link_id) ) return(true);
   return false;
}

/**
 * A Trivial memory-based store - no support for tokens
 */
class TrivialOAuthDataStore extends OAuthDataStore {
    private $consumers = array();

    function add_consumer($consumer_key, $consumer_secret) {
        $this->consumers[$consumer_key] = $consumer_secret;
    }

    function lookup_consumer($consumer_key) {
        if ( strpos($consumer_key, "http://" ) === 0 ) {
            $consumer = new OAuthConsumer($consumer_key,"secret", NULL);
            return $consumer;
        }
        if ( $this->consumers[$consumer_key] ) {
            $consumer = new OAuthConsumer($consumer_key,$this->consumers[$consumer_key], NULL);
            return $consumer;
        }
        return NULL;
    }

    function lookup_token($consumer, $token_type, $token) {
        return new OAuthToken($consumer, "");
    }

    // Return NULL if the nonce has not been used
    // Return $nonce if the nonce was previously used
    function lookup_nonce($consumer, $token, $nonce, $timestamp) {
        // Should add some clever logic to keep nonces from
        // being reused - for no we are really trusting
	// that the timestamp will save us
        return NULL;
    }

    function new_request_token($consumer) {
        return NULL;
    }

    function new_access_token($token, $consumer) {
        return NULL;
    }
}


// Basic LTI Class that does the setup and provides utility
// functions
class BLTI {

    public $valid = false;
    public $complete = false;
    public $message = false;
    public $basestring = false;
    public $info = false;

    function __construct($parm=false, $usesession=true, $doredirect=true) {

        // If this request is not an LTI Launch, either
        // give up or try to retrieve the context from session
        if ( ! is_basic_lti_request() ) {
            if ( $usesession === false ) return;  
            if ( strlen(session_id()) > 0 ) {
                $info = $_SESSION['_basic_lti_context'];
                if ( isset($info) ) {
                    $this->info = $info;
                    $this->valid = true;
                    return;
                }
                $this->message = "Could not find context in session";
                return;
            }
            $this->message = "Session not available";
            return;
        }

        // Insure we have a valid launch
        if ( empty($_REQUEST["oauth_consumer_key"]) ) {
            $this->message = "Missing oauth_consumer_key in request";
            return;
        }
        $oauth_consumer_key = $_REQUEST["oauth_consumer_key"];

        // Find the secret - either form the parameter as a string or
        // look it up in a database from parameters we are given
        $secret = false;
        if ( is_string($parm) ) {
            $secret = $parm;
        } else if ( ! is_array($parm) ) {
            $this->message = "Constructor requires a secret or database information.";
            return;
        } else {
            $sql = 'SELECT * FROM '.$parm['table'].' WHERE '.
                ($parm['key_column'] ? $parm['key_column'] : 'oauth_consumer_key').
                '='.
                "'".mysql_real_escape_string($oauth_consumer_key)."'";
            $result = mysql_query($sql);
            $num_rows = mysql_num_rows($result);
            if ( $num_rows != 1 ) {
                $this->message = "Your consumer is not authorized oauth_consumer_key=".$oauth_consumer_key;
                return;
            } else {
                while ($row = mysql_fetch_assoc($result)) {
                    $secret = $row[$parms['secret_column']?$parms['secret_column']:'secret'];
                    break;
                }
                if ( ! is_string($secret) ) {
                    $this->message = "Could not retrieve secret oauth_consumer_key=".$oauth_consumer_key;
                    return;
                }
            }
        }

        // Verify the message signature
        $store = new TrivialOAuthDataStore();
        $store->add_consumer($oauth_consumer_key, $secret);

        $server = new OAuthServer($store);

        $method = new OAuthSignatureMethod_HMAC_SHA1();
        $server->add_signature_method($method);
        $request = OAuthRequest::from_request();
        
        $this->basestring = $request->get_signature_base_string();

        try {
            $server->verify_request($request);
            $this->valid = true;
        } catch (Exception $e) {
            $this->message = $e->getMessage();
            return;
        }

        // Store the launch information in the session for later
        $newinfo = array();
        foreach($_POST as $key => $value ) {
            if ( $key == "basiclti_submit" ) continue;
            if ( strpos($key, "oauth_") === false ) {
                $newinfo[$key] = $value;
                continue;
            }
            if ( $key == "oauth_consumer_key" ) {
                $newinfo[$key] = $value;
                continue;
            }
        }

        $this->info = $newinfo;
        if ( $usesession == true and strlen(session_id()) > 0 ) {
             $_SESSION['_basic_lti_context'] = $this->info;
        }

        if ( $this->valid && $doredirect ) {
            $host = $_SERVER['HTTP_HOST'];
            $uri = $_SERVER['PHP_SELF'];
            header("Location: http://$host$uri");
            $this->complete = true;
        }
    }

    function isInstructor() {
        $roles = $this->info['roles'];
        $roles = strtolower($roles);
        if ( ! ( strpos($roles,"instructor") === false ) ) return true;
        if ( ! ( strpos($roles,"administrator") === false ) ) return true;
        return false;
    }

    function getUserEmail() {
        $email = $this->info['lis_person_contact_email_primary'];
        if ( strlen($email) > 0 ) return $email;
        # Sakai Hack
        $email = $this->info['lis_person_contact_emailprimary'];
        if ( strlen($email) > 0 ) return $email;
        return false;
    }

    function getUserShortName() {
        $username = $this->info['ext_user_username'];
       /* $givenname = str_replace(' ','',$givenname); 
        $email = $this->getUserEmail();
        $familyname = $this->info['lis_person_name_family'];
        $fullname = $this->info['lis_person_name_full'];
        #if ( strlen($email) > 0 ) return $email;
        if ( strlen($givenname) > 0 ) return $givenname;
        if ( strlen($familyname) > 0 ) return $familyname;*/
        return $username;
    }

  
    function getUserName() {
        $givenname = $this->info['lis_person_name_given'];
        $familyname = $this->info['lis_person_name_family'];
        $fullname = $this->info['lis_person_name_full'];
        if ( strlen($fullname) > 0 ) return $fullname;
        if ( strlen($familyname) > 0 and strlen($givenname) > 0 ) return $givenname + $familyname;
        return $this->getUserEmail();
    }
    
    function getUserPass(){ 
		$pass = $this->info['lis_person_password'];
		if ( strlen($pass) > 0 ) return  $pass;
		return "SQN";
	}
    
    function getUserKey() {
        $oauth = $this->info['oauth_consumer_key'];
        $id = $this->info['user_id'];
        if ( strlen($id) > 0 and strlen($oauth) > 0 ) return $oauth . ':' . $id;
        return false;
    }

    function getCourseKey() {
        $oauth = $this->info['oauth_consumer_key'];
        $id = $this->info['context_id'];
        if ( strlen($id) > 0 and strlen($oauth) > 0 ) return $oauth . ':' . $id;
        return false;
    }

    function getCourseName() {
        $label = str_replace(' ','',$this->info['context_label']);
        $title = str_replace(' ','',$this->info['context_title']);
        //$id = $this->info['context_id'];
        if ( strlen($label) > 0 ) return $label;
        if ( strlen($title) > 0 ) return $title;
        if ( strlen($id) > 0 ) return $id;
        return false;
    }

    function getEnrolledUsers(){
		$body = $this->info['enrolledusers'];
		$enrolledUsers = json_decode($body,true);
		
		foreach($enrolledUsers as &$userv)
			{
				foreach($userv as $uk => &$uv){
					 if($uk != 'id' && 
					 $uk != 'username' && 
					 $uk != 'fullname' &&
					 $uk != 'firstname' &&					 
					 $uk != 'lastname' &&
					 $uk != 'email' &&
					 $uk != 'roles'  ){ unset($userv[$uk]);}
					 
					 if($uk == 'username' ||
					  $uk == 'email'){
				$uv = str_replace(' ','',$uv); 
					}
				}
			}
		return $enrolledUsers;
    }
    
    function getEnrolledLogins(){
		$enrolledUsers = $this->getEnrolledUsers();

		$logins = Array();
		
		foreach($enrolledUsers as &$userv)
			{
				foreach($userv as $uk => $uv){
					if ($uk == 'username' ){
						array_push($logins, $uv);
					}
				}
			}
		return $logins;
	}

    function getEnrolledFullname(){
                $enrolledUsers = $this->getEnrolledUsers();

                $logins = Array();
                
                foreach($enrolledUsers as &$userv)
                        {
                                foreach($userv as $uk => $uv){
                                        if ($uk == 'fullname' ){
                                                array_push($logins, $uv);
                                        }
                                }
                        }
                return $logins;
        }

    // TODO: Add javascript version if headers are already sent
    function redirect() {
            $host = $_SERVER['HTTP_HOST'];
            $uri = $_SERVER['PHP_SELF'];
            header("Location: http://$host$uri");
    }

    function dump() { 
        if ( ! $this->valid or $this->info == false ) return "Context not valid\n";
        $ret = "";
        if ( $this->isInstructor===true ) {
            $ret .= "isInstructor() = true\n";
        } else {
            $ret .= "isInstructor() = false\n";
        }
        $ret .= "getUserEmail() = ".$this->getUserEmail()."\n";
        $ret .= "getUserShortName() = ".$this->getUserShortName()."\n";
        $ret .= "getUserName() = ".$this->getUserName()."\n";
        $ret .= "getUserKey() = ".$this->getUserKey()."\n";
        $ret .= "getUserPass() = ".$this->getUserPass()."\n";
        $ret .= "getCourseName() = ".$this->getCourseName()."\n";
        $ret .= "getCourseKey() = ".$this->getCourseKey()."\n";
        $ret .= "roles = ".$this->info['roles']."\n";
        return $ret;
    }

}

?>

