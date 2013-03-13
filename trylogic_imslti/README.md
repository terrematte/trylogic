# Overview

This is the integration with the Moodle is provided by the IMS - [Learning Tool Interoperability](http://www.imsglobal.org/toolsinteroperability2.cfm) for the [ProofWeb](http://prover.cs.ru.nl/)


# What is the ProofWeb ?

ProofWeb is a system for practising natural deduction on Web. A system for teaching logic and for using proof assistants, like [Coq](http://coq.inria.fr/), or [Isabelle](http://isabelle.in.tum.de/). 

# What is IMS-LTI ?

IMS is developing Learning Tools Interoperability (LTI) to allow remote tools and content to be integrated into a Learning Management System (LMS). So basically it is a set of standard integration methods that enable two systems talk to each other in a common language/protocol. See :
    
* Basic LTI: [30 min video](http://vimeo.com/8073453)
* Breaking down barries	through Learning Tool Interoperability: [10 min video](http://www.youtube.com/watch?v=Hqezqc3ukhM)
* A [Blog Review](http://www.somerandomthoughts.com/blog/2012/01/08/review-lti-provider-for-moodle-2-2/)

# Requirements

* A ProofWeb server [installed](http://prover.cs.ru.nl/install.php)
* A Moodle server available. 
  
  
# Install and Try it


1. Add the line in above to the lib file of Moodle server of IMS-LTI */var/www/{installed-directory}/mod/lti/locallib.php*, by the line ~56 :

	require_once($CFG->dirroot . '/enrol/externallib.php');

And add the line in above to the same lib file of Moodle server of IMS-LTI */var/www/{installed-directory}/mod/lti/locallib.php*, by the line ~245 :

	// Call the external function.
	$enrolledusers =  core_enrol_external::get_enrolled_users($course->id);
    $requestparams['enrolledusers'] = json_encode($enrolledusers);
    

Add in your apache server and define you BLTI Key. Use you BLTI Key for add the Task Generator as *External Tool* in our *Moodle's course*.

    
# License

*GNU General Public License*
