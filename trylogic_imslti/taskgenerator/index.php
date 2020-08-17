<?php 
// Load up the Basic LTI Support code
require_once 'ims-blti/blti.php';

ini_set('max_execution_time', 5000); 

// Initialize, all secrets are 'secret', do not set session, and do not redirect
$context = new BLTI("secret", false, false);
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
    <title>Adicionar Exercícios</title>
    <link rel="stylesheet" type="text/css" href="base.css" />
    <script src="jquery-1.7.1.min.js"></script>
	<script type='text/javascript'>    
	<?php
		$students = json_encode($context->getEnrolledLogins());
		$students_fullname = json_encode($context->getEnrolledFullname());
		echo "var students = ". $students . ";\n";
	        echo "var students_fullname = ". $students_fullname . ";\n";
		echo "var num_students = students.length;\n";
		echo "var def = {\n    num_exercises: 1 \n };\n";
	?>

	function openTab(evt, tabName) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(tabName).style.display = "block";
		  evt.currentTarget.className += " active";
	}

	function all_exercises() {
        var iframe = document.getElementById("frame_all_ex");
        var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
        var all_ex = innerDoc.getElementsByTagName('table')[0];
        var tasks = document.getElementById("all_exercises");
		if(all_ex){
			if(tasks) tasks.innerHTML = all_ex.outerHTML;
		}
	}

	<?php

       foreach($users as $s){
        echo("$.ajax({
                url : '/cgi/admin.ml',
                type: 'post',
                data : {'login' : '"."$user"."','pass' : '"."$user"."', 'course' : '"."$course"."-"."$s"."'},
                success: function(res) {
                    var parser = new DOMParser();
                    doc = parser.parseFromString(res, 'text/html');
                    if(doc) var line = doc.getElementsByTagName('tr')[1];
                    var all_tasks = document.getElementById('all_tasks');
                    if(all_tasks && line) all_tasks.after(line)
                  //console.log( line );
                },
                error: function() {
                    alert('Error occured');
                }
                });");
        }
	?>
	
    </script>
    <script src="query.js"></script>
  </head>

<body onload="document.all_ex.submit()">

<?php
	if ( $context->isInstructor() ) {
?>


<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'tab1')">ProofWeb Settings</button>
  <button class="tablinks" onclick="openTab(event, 'tab2')">Generate Tasks</button>
  <button class="tablinks" onclick="openTab(event, 'tab3')">Check Students</button>
</div>


<div id="tab1" class="tabcontent">
<form>
	  <h1>ProofWeb Settings</h2>

      <div class="box">

	  <div class="row">
        <div class="cell">
              <div class="name">Set ProofWeb exercises</div>
        </div>

        <div class="cell">
			<div class="block hover">
                        <a id="prepare_course">Set exercises</a>
            </div>
		</div>
        <div class="name_descr">*Set-up the ProofWeb's exercises on Propositional Logic (PL) and First Order Logic (FOL) for all Students.</div>
		</div>

        <div class="row">
          <div class="cell">
                        <div class="name">Propositional Logic Challenges</div>
          </div>
          <div class="cell">
            <div class="block hover">
                        <a id="lcp_save">Save</a>
                        <a id="lcp_hidden">Hidden/Unhidden</a>
                        <a id="lcp_rm">Remove</a>
            </div>
          </div>
		<div class="name_descr">*Set-up 10 personalized exercises of Propositional Logic (PL) for each Students.</div>
        </div>

        <div class="row">
          <div class="cell">
                        <div class="name">First Order Logic Challenges</div>
          </div>
          <div class="cell">
            <div class="block hover">
                        <a id="lcpo_save">Save</a> 
                        <a id="lcpo_hidden">Hidden/Unhidden</a>
                        <a id="lcpo_rm">Remove</a>
            </div>
          </div>
          <div class="name_descr">*Set-up 10 personalized exercises of First Order Logic (FOL) for each Students.</div>
         </div>
		<br/>
      </div>
	</form>	
</div>

<div id="tab2" class="tabcontent">
	<form>
      <div class="box">

         <h1>Generate Tasks</h1>

		<div class="row">
          <div class="cell"><div class="name">Defined Tasks</div></div>
          <div class="cell">
			  <div class="block">
			  <select id="tasktype">
					<option value="None">-- Select --</option>
					<option value="provable-level1">Only Proofs - Level 1</option>
					<option value="provable-level2">Only Proofs - Level 2</option>
					<option value="provable-level3">Only Proofs - Level 3</option>
					<option value="provable-level4">Only Proofs - Level 4</option>
					<option value="refutable-level1">Only Refutations - Level 1</option>
					<option value="refutable-level2">Only Refutations - Level 2</option>
					<option value="refutable-level3">Only Refutations - Level 3</option>
					<option value="refutable-level4">Only Refutations - Level 4</option>
					<option value="conjecture-level1">Conjectures to Prove or Refute - Level 1</option>
					<option value="conjecture-level2">Conjectures to Prove or Refute - Level 2</option>
					<option value="conjecture-level3">Conjectures to Prove or Refute - Level 3</option>
					<option value="conjecture-level4">Conjectures to Prove or Refute - Level 4</option>
			 </select>
			</div>
	      </div>
		<div class="name_descr">*Select a pre-configured difficulty level.</div>
          </div>
        <div class="row">
          <div class="cell"><div class="name">Name of Tasks</div></div>
          <div class="cell">
            <div class="block">
              <input type="text" id="code" name="code" value="abc"/>
            </div>
          </div>
		<div class="name_descr">*Provide a prefix name for the tasks. The students will see this prefix on each task.</div>
        </div>
        <div class="row">
          <div class="cell"><div class="name">Tasks by Student</div></div>
          <div class="cell">
            <div class="block">
              <input type="text" class="num"  id="num_exercises" name="num_exercises" value="0"/> (<span id="num_total">0</span> in total)
            </div>
          </div>
		<div class="name_descr">*Provide the number of different task per student. Note that for each conjecture has two templates, one for students to prove, another template to refute, only one is feasible.</div>          
        </div>
        <div class="row">
          <div class="cell"><div class="name">Atoms</div></div>
          <div class="cell">
            <div class="block">
               <input type="text" id="atoms" name="atoms" value="A, B, C, D" />
            </div>
          </div>
		<div class="name_descr">*Provide the letters for the propositional atoms. The number of distinct letters will provide the set of possible generated formula.</div>            
        </div>
        <div class="row">
          <div class="cell"><div class="name">Connectives</div></div>
          <div class="cell">
            <div class="block">
              <ul>
               <!-- <li><label><input type="checkbox" name="conectives" value="bottom" />Bottom</label></li> -->
               <!-- <li><label><input type="checkbox" name="conectives" value="top" />Top</label></li>		 -->
                <li><label><input type="checkbox" name="conectives" id="not" value="not" checked />Negation</label></li>
                <li><label><input type="checkbox" name="conectives" id="or" value="or" checked />Disjuction</label></li>
              </ul>
              <ul>
                <li><label><input type="checkbox" name="conectives" id="and" value="and" checked />Conjuction</label></li>
                <li><label><input type="checkbox" name="conectives" id="imp" value="imp" checked />Implication</label></li>
                <li><label><input type="checkbox" name="conectives" id="biimp" value="biimp" checked />Biimplication</label></li>
              </ul>
              <br />

            </div>
          </div>
		<div class="name_descr">*Select the possibles connectives on each formula.</div>          
        </div>
        <div class="row">
          <div class="cell"><div class="name">Complexity</div></div>
          <div class="cell">
            <div class="block">
              <input type="text" class="num" id="compl_min" name="compl_min" value="2" /> à
              <input type="text" class="num" id="compl_max" name="compl_max" value="6" />
            </div>
          </div>
		<div class="name_descr">*Select the range of complexity of each formula. The complexity is measured by the total number of connectives on a formula.</div>          
        </div>
        <div class="row">
          <div class="cell"><div class="name">Number of Premises</div></div>
          <div class="cell">
            <div class="block">
              <input type="text" class="num" id="num_premises" name="num_premises" value="2" />
            </div>
          </div>
   		<div class="name_descr">*Select the number of premises on each tasks.</div>          
        </div>
        <div class="row">
          <div class="cell"><div class="name">Restrictions</div></div>
          <div class="cell">
            <div class="block">

                <label><input type="checkbox" id="same_proportion" name="restrictions" value="same_proportion" checked />Same proportions</label>
		<br />
                <label><input type="checkbox" id="relevant" name="restrictions" value="must_be_relevant" checked />Relevant Premises</label>
		<br />
                <label><input type="checkbox" id="no_superfluous" name="restrictions" value="no_superfluous_premises_allowed" checked />All premises needed</label>
		<br />
                <label><input type="checkbox" id="premise_contingent" name="restrictions" value="premise_conjunction_must_be_contingent" checked />Contingent Conjunction of Premises</label>
		<br />
                <label><input type="radio" id="only_provable" name="restrictions" value="only_provable"/>Only Provables</label>
		<br />
                <label><input type="radio" id="only_refutable" name="restrictions" value="only_refutable" />Only Refutables</label>
		<br />
                <label><input type="radio" id="refutable_provable" name="restrictions" value="refutable_provable" checked />Provables and Refutables</label>
		<br />

			</div>
			</div>
			  		<div class="name_descr">
						<ul>
							<li><b>Same proportions:</b>Indicates the same total number of tasks for Proof and Refute, i.e. 50% of provable tasks, and 50% of refutable tasks. But the tasks are assign by random, so each students might receive an arbitrary number of each type, provable or refutable.</li>
							<li><b>Relevant Premises:</b> Each premise share at least one atom with the conclusion.</li>
							<li><b>All premises needed:</b> The conclusion is not satisfactible without any of premises.</li>
							<li><b>Contingent Conjunction of Premises:</b> The conjunction of premises is not a tautology neither a contradiction.</li>
							<li><b>Only Provables, Refutables, or Provables and Refutables:</b> Indicates the type of generated conjectures.</li>
						</ul>
			  		</div>
		</div>
        <div class="row">
          <div class="cell">
			<div class="name">Course</div>
          </div>
          <div class="cell">
            <div class="block">
					<input type="hidden" name="course" value="<?php echo($context->getCourseName());?>" />
					<?php echo($context->getCourseName());?>
			</div>
          </div>
		</div>
        <div class="row">
          <div class="cell"><div class="name"></div></div>
          <div class="cell"><div class="block hover">
				<img id="load" src="loadbar.gif" alt="loadbar" height="42" style="display: none">
				<a id="send">Send</a> <a id="salvar"  style="display: none">Save to ProofWeb</a></div></div>
		<div class="name_descr"> *This might take several minutes. For instance, to generate 50 conjectures on Level 4, it takes 40 minutes. <br/>
					  Be patient with our SAT solver, he is working NP-hard. :)</div>
        </div>
      </div>

    <div id="side">
      <div id="menu" style="display: none">
        <a id="codigo" class="click hover">Code</a>
        <a id="exerc" class="click hover">Tasks</a>
        <a id="detalhes" class="click hover">Details</a>
      </div>
      <div id="c_codigo" class="tab">
        <textarea name="codigo"></textarea>
      </div>
	<div id="c_exerc" class="tab"  style="display: none"></div>
      	<div id="c_detalhes" class="tab"  style="display: none"></div>
   </div>
  </form>
</div>

<div id="tab3" class="tabcontent">


<div class="box-form">
<br/><br/>
<h2> Students Exercices on course <?php echo($course);?> </h2>
<br/><br/>
	<form action="/cgi/admin.ml" style="display:inline" name="all_ex"  method="post"  target="frame_all_ex">
			<input type="hidden" name="login" value="<?php echo($user);?>">
			<input type="hidden" name="pass" value="<?php echo($user);?>">
			<input type="hidden" name="course" value="<?php echo($course);?>">
	</form>


<div id="all_exercises"></div>

<br/><br/>

<h2> Students Challenging Task's on course <?php echo($course);?> </h2>

<br/><br/>

	<table border="1" id="table_ex">
		<tbody>
			<tr id="all_tasks">
			<td><b>Name (login)</b></td><td><b>Not touched</b></td><td style="color: red;"><b>Incomplete</b></td><td style="color: orange;"><b>Correct</b></td><td style="color: green;"><b>Solved</b></td><td>Look</td>
			</tr>

		 </tbody>
	</table>

<iframe name="frame_all_ex" id="frame_all_ex" onload="all_exercises()" style="display: none;"></iframe>

</div>


<?php

// Mostra todas as informações, usa o padrão INFO_ALL
 phpinfo();

} else {
    print "<p style=\"color:red\"> Você não tem permissão de Adminstrador!<br/><br/>".$context->message."<p>\n";
}



?>
  </body>
</html>


