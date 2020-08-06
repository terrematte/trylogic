<?php 
// Load up the Basic LTI Support code
require_once 'ims-blti/blti.php';

// Initialize, all secrets are 'secret', do not set session, and do not redirect
$context = new BLTI("password", false, false);
?>

<html><body>

<?php
	if ( $context->isInstructor() ) {
?>	
	
<h2>TryLogic - Admin LTI</h2>

<h4> Olá <?php echo($context->getUserName()."!"); ?> </h4>


<form action="/cgi/admin.ml" style="display:inline"  method="post"  target="frame_trylogic">
	<input type="hidden" name="login" value="<?php echo($context->getUserShortName());?>">
	<input type="hidden" name="pass" value="<?php echo($context->getUserShortName());?>">
	<input type="hidden" name="course" value="<?php echo($context->getCourseName());?>">
	<input type="submit" value="Go to ProofWeb admin page" style="display:inline" >
</form>
 
<form action="/logged.html" style="display:inline"  method="post" target="frame_trylogic">
	<input type="hidden" name="login" value="<?php echo($context->getCourseName().'/'.$context->getUserShortName());?>">
	<input type="hidden" name="pass" value="<?php echo($context->getUserShortName());?>">
	<input type="hidden" name="adminlogin" value="">
	<input type="hidden" name="adminpass" value="">
	<input type="hidden" name="prefix" value="pub/">
	<input type="hidden" name="prover" value="coq">
	<input type="submit" value="Go to ProofWeb" style="display:inline" >
</form> 

<form action="/trylogic.html" style="display:inline"  method="post" target="frame_trylogic">
	<input type="hidden" name="login" value="<?php echo($context->getCourseName().'/'.$context->getUserShortName());?>">
	<input type="hidden" name="pass" value="<?php echo($context->getUserShortName());?>">
	<input type="hidden" name="adminlogin" value="">
	<input type="hidden" name="adminpass" value="">
	<input type="hidden" name="prefix" value="pub/">
	<input type="hidden" name="prover" value="coq">
	<input type="submit" value="Go to TryLogic"  style="display:inline" >
</form> 

<form action="gen/" style="display:inline"  method="post" target="frame_trylogic">
	<input type="submit" value="Go to Exercice Generator"  style="display:inline" >
</form>

<form action="/logicamente/" style="display:inline"  method="post" target="frame_trylogic">
	<input type="submit" value="Go to Logicamente"  style="display:inline" >
</form>

<iframe name="frame_trylogic" height="800px" width="100%"></iframe> 

<?php

echo("<textarea cols='200' rows='30'>");
print_r($context->getEnrolledUsers());
echo("</textarea><br/>");
?>

<?php
} else {
    print "<p style=\"color:red\"> Você não tem permissão de Adminstrador!".$context->message."<p>\n";
}

?>	

</body></html>


