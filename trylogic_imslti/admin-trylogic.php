<?php 
// Load up the Basic LTI Support code
require_once 'ims-blti/blti.php';

// Initialize, all secrets are 'password', do not set session, and do not redirect
	$context = new BLTI("password", false, false);
	$students =  $context->getEnrolledUsers();
	$course = $context->getCourseName();
	$user = $context->getUserShortName();
	$users = array();
	foreach($students as $st){
		$users[] =  $st['username'];
	}
	arsort($users); 
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Avaliar</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>

function all_exercises() {
        var iframe = document.getElementById("frame_all_ex");
        var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
        var all_ex = innerDoc.getElementsByTagName('table')[0];
        var tasks = document.getElementById("all_exercises");
	if(all_ex){
		if(tasks) tasks.innerHTML = all_ex.outerHTML;
	}
}

</script>

<?php

       foreach($users as $s){
        echo("<script>
                $.ajax({
                url : '/cgi/admin.ml',
                type: 'post',
                data : {'login' : '"."$user"."','pass' : '"."$user"."', 'course' : '"."$course"."-"."$s"."'},
                success: function(res) {
                    var parser = new DOMParser();
                    doc = parser.parseFromString(res, 'text/html');
                    if(doc) var line = doc.getElementsByTagName('tr')[1];
                    var all_tasks = document.getElementById('all_tasks');
                    if(all_tasks && line) all_tasks.after(line)
                  console.log( line );
                },
                error: function() {
                    alert('Error occured');
                }
                });
           </script>");
        }
?>

</head>

<body onload="document.all_ex.submit()">

<?php
	if ( $context->isInstructor() ) {
?>


<h2> Students Exercices of course <?php echo($course);?> </h2>


<form action="/cgi/admin.ml" style="display:inline" name="all_ex"  method="post"  target="frame_all_ex">
        <input type="hidden" name="login" value="<?php echo($user);?>">
        <input type="hidden" name="pass" value="<?php echo($user);?>">
        <input type="hidden" name="course" value="<?php echo($course);?>">
</form>


<div id="all_exercises"></div>

<h2> Students Challenging Task's of course <?php echo($course);?> </h2>


<table border="1" id="table_ex">
	<tbody>
		<tr id="all_tasks">
		<td><b>Name (login)</b></td><td><b>Not touched</b></td><td style="color: red;"><b>Incomplete</b></td><td style="color: orange;"><b>Correct</b></td><td style="color: green;"><b>Solved</b></td><td>Look</td>
		</tr>

     </tbody>
</table>

<iframe name="frame_all_ex" id="frame_all_ex" onload="all_exercises()" style="display: none;"></iframe>


<?php
} else {
    print "<p style=\"color:red\"> Você não tem permissão de Adminstrador!".$context->message."<p>\n";
}

?>

</body>
</html>
