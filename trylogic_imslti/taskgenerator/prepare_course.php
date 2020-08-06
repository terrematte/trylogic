<?php
set_time_limit(0);

/**
 * Simple helper to debug to the console
 *
 * @param $data object, array, string $data
 * @param $context string  Optional a description.
 *
 * @return string
 */
function debug_to_console($data, $context = 'Debug in Console') {

    // Buffering to solve problems frameworks, like header() in this and not a solid return.
    ob_start();

    $output  = 'console.info(\'' . $context . ':\');';
    $output .= 'console.log(' . json_encode($data) . ');';
    $output  = sprintf('<script>%s</script>', $output);

    echo $output;
}

$handle = fopen('php://input','r');
$jsonInput = fgets($handle);

$dec = json_decode($jsonInput,true);

$students = $dec['students'];

$students_fullname = $dec['students_fullname'];


$course = $dec['course'];

$tasks_orig = '/opt/proofweb/tasks/course_lcp_lcpo';
$tasks_dest = '/opt/proofweb/tasks/'.$course ;
$dir_save = '/opt/proofweb/files/'.$course ;
$fail = 0;

if ( ! file_exists($dir_save) ) {
	mkdir($dir_save, 0755);

	exec('cp - '.$tasks_orig.' '.$tasks_dest);

} else {
        $fail = $fail+1;
}

$f_logins  = "/opt/proofweb/logins";

foreach($students as $n => $s) {
	$d = $dir_save.'/'.$s;
	if(! file_exists($d) ) {
	     	mkdir($d, 0755);
		$login = $course . '/' . $s . ',' . md5( $s ) . ',' . $students_fullname[$n] ;
		exec('echo ' . $login . ' >> ' . $f_logins);
	}
}

foreach($students as $n => $s) {
	$d = $dir_save .'-'. $s;
	if(! file_exists($d) ) {
                mkdir($d, 0755);
		$login = $course . '-' . $s .  '/' . $s . ',' . md5( $s ) . ',' . $students_fullname[$n] ;
		exec('echo ' . $login . ' >> ' . $f_logins);
	}
}

if($fail > 0){
        $return = array();
        $return['msg']="The exercises are updated on ProofWeb!\n\n Update permissons on Server.";
        echo json_encode($return);
} else{
        $return = array();
        $return['msg']="The exercises are setted on ProofWeb!\n\n Update permissons on Server.";
        echo json_encode($return);
}

?>
