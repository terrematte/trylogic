<?php 
// Load up the Basic LTI Support code
require_once 'ims-blti/blti.php';

// Initialize, all secrets are 'secret', do not set session, and do not redirect
$context = new BLTI("secrettryl0g1cLTI", false, false);
?>

<html><body>

<?php

if ( $context->valid ) {
	print "<form action=\"/trylogic.html\" method=\"post\" name=\"frm\">\n";
	print "<input type=\"hidden\" name=\"login\" value=".$context->getCourseName().'/'.$context->getUserShortName().">\n";
	print "<input type=\"hidden\" name=\"pass\" value=".$context->getUserShortName().">\n";
	print "<input type=\"hidden\" name=\"adminlogin\" value=\"\">\n";
	print "<input type=\"hidden\" name=\"adminpass\" value=\"\">\n";
	print "<input type=\"hidden\" name=\"prefix\" value=\"pub/\">\n";
	print "<input type=\"hidden\" name=\"prover\" value=\"coq\">\n";
	print "<input type=\"hidden\" name=\"file_name\" value=\"file.v\">\n";
    print "</form>\n"; 
} else {
    print "<p style=\"color:red\">Could not establish context: ".$context->message."<p>\n";
}

?>	
	
</form>

<script language="JavaScript">
document.frm.submit();
</script>

</body></html>

