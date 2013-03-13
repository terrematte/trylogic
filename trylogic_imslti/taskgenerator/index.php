<?php 
// Load up the Basic LTI Support code
require_once '../ims-blti/blti.php';

// Initialize, the secret is 'secrettryl0g1cLTI', do not set session, and do not redirect
$context = new BLTI("secrettryl0g1cLTI", false, false);
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
		/**
		 * Get the logins of Enrolled User in the Course by the context of IMS-LTI.
		 * 
		 * PHP Array to a JS Array. 
		 * */
		$students = json_encode($context->getEnrolledLogins());
		echo "var students = ". $students . ";\n";
		echo "var num_students = students.length;\n";
		echo "var def = {\n    num_exercises: 1 \n };\n";
	?>	
    </script>
    <script src="query.js"></script>
  </head>
  <body>
		
<?php
	/**
	 *  Verify if the user role (is a Administrator or a Teacher) by the context of IMS-LTI.
	 * */
	 
	if ( $context->isInstructor() ) {
?>	

	
<h2>TryLogic - Task Generator LTI</h2>

   
    <form>
		
	  <h1>Generate Tasks</h1>
      <div class="box">
        <div class="row">
          <div class="cell"><div class="name">Name of Tasks</div></div>
          <div class="cell">
            <div class="block">
              <input type="text" name="code" value="abc"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="cell"><div class="name">Tasks by Student</div></div>
          <div class="cell">
            <div class="block">
              <input type="text" class="num" name="num_exercises" value="0"/> (<span id="num_total">0</span> in total)
            </div>
          </div>
        </div>
        <div class="row">
          <div class="cell"><div class="name">Atoms</div></div>
          <div class="cell">
            <div class="block">
              <input type="text" name="atoms" value="A, B, C, D" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="cell"><div class="name">Connectives</div></div>
          <div class="cell">
            <div class="block">
              <ul>
               <!-- <li><label><input type="checkbox" name="conectives" value="bottom" />Bottom</label></li> -->
               <!-- <li><label><input type="checkbox" name="conectives" value="top" />Top</label></li>		 -->
                <li><label><input type="checkbox" name="conectives" value="not" checked />Negation</label></li>
                <li><label><input type="checkbox" name="conectives" value="or" checked />Disjuction</label></li>
              </ul>
              <ul>
                <li><label><input type="checkbox" name="conectives" value="and" checked />Conjuction</label></li>
                <li><label><input type="checkbox" name="conectives" value="imp" checked />Implication</label></li>
                <li><label><input type="checkbox" name="conectives" value="biimp" checked />Biimplication</label></li>
              </ul>
              <br />

            </div>
          </div>
        </div>
        <div class="row">
          <div class="cell"><div class="name">Complexity</div></div>
          <div class="cell">
            <div class="block">

              <input type="text" class="num" name="compl_min" value="2" /> à
              <input type="text" class="num" name="compl_max" value="6" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="cell"><div class="name">Number of Premisses</div></div>
          <div class="cell">
            <div class="block">
              <input type="text" class="num" name="num_premises" value="2" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="cell"><div class="name">Restrictions</div></div>
          <div class="cell">
            <div class="block">

                <label><input type="checkbox" name="restrictions" value="same_proportion" checked />Same proportions</label>
		<br />
                <label><input type="checkbox" name="restrictions" value="must_be_relevant" checked />Relevant Premises</label>
		<br />
                <label><input type="checkbox" name="restrictions" value="no_superfluous_premises_allowed" checked />All premises needed</label>
		<br />
                <label><input type="checkbox" name="restrictions" value="premise_conjunction_must_be_contingent" checked />Contingent Conjunction of Premises</label>
		<br />
                <label><input type="radio" name="restrictions" value="only_refutable"/>Only Refutables</label>
		<br />
                <label><input type="radio" name="restrictions" value="only_provable" />Only Provables</label>
		<br />
                <label><input type="radio" name="restrictions" value="refutable_provable" checked />Provables and Refutables</label>
		<br />
		
			</div>
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
          <div class="cell"><div class="block hover"><a id="send">Send</a> <a id="salvar"  style="display: none">Save to ProofWeb</a></div></div>
          
        </div>
      </div>
    </form>
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
    
    

<?php
} else {
    print "<p style=\"color:red\"> Você não tem permissão de Adminstrador!<br/><br/>".$context->message."<p>\n";
}

?>	    
  </body>
</html>
