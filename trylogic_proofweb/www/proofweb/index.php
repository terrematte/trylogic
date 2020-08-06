<?php include("header.php"); ?>

<h2><a name="logic">Logic on the web</a></h2>
<ul>

</li>
<div>
<br/>
<!--
	<div style="float:left">
	<p><b> Registered course participant login:</b></p>
		<form action="auth.php" method="post" name="gateway">
		<table>
		<tr>
			<td>Username:</td>
			<td><input type="edit" name="login" value=""></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="pass" value=""></td>
		</tr>
		<tr>
			<td>Course:</td>
			<td>
			<select name="logingrp">
                                <option value="UTFPR/2013.1/LO/">[2013.1] UTFPR - Lógica</option>
                                <option value="UFRN/2013.1/LOMat/">[2013.1] UFRN - Lógica (Matemática)</option>
                                <option value="UFRN/2013.1/LA/">[2013.1] UFRN - 24M56 - Lógica Aplicada à Computação</option>
                                <option value="UFRN/2012.2/LA/">[2012.2] UFRN - 24M56 - Lógica Aplicada à Computação</option>
                                <option value="UFRN/2012.1/LA/M34/">[2012.1] UFRN - 24M34 - Lógica Aplicada à Computação</option>
                                <option value="UFRN/2012.1/LA/M56/">[2012.1] UFRN - 24M56 - Lógica Aplicada à Computação</option>
			</select>
			</td>
		</tr>
		</table>
			<div align="center">
			<input type="submit" value="GO TO USER PAGE">
			 </div>
		</form>
	</div>

	<br/>
-->
	<div  align="center">

<!--	<p><b> Guest participant login:</b></p> -->
		<form action="guest.php" method="get" target="_blank" >
			<table>
				<tr>
				<a href="guest.php"><img src="/proofweb/pics/interface.jpg" alt="Login" border="1" height="80" width="120"/></a>
				</tr>
			<tr>
				<td align="center"><input value="GUEST LOGIN" type="submit"/></td>
			</tr>
			</table>
		</form>
	</div>
</div>

<br>

<hr style="clear: both" />

<br>

<div  align="center">
	<form action="/trylogic.html" method="post">
        	<input type="hidden" name="login" value="nogroup/user">
	        <input type="hidden" name="pass" value="pass">
        	<input type="hidden" name="adminlogin" value="">
	        <input type="hidden" name="adminpass" value="">
	        <input type="hidden" name="prefix" value="pub/">
	        <input type="hidden" name="prover" value="coq">
	        <input type="hidden" name="file_name" value="file.v">
	        <input type="submit" value="Access the TryLogic tutorial">
	</form>
</div>

<br>

<hr/>

<h2><a name="logic">Tutorial</a></h2>

<br/><br/>

<div align="center">
<a href="man.pdf"><img src="pics/manual.jpg" alt="Manual" border="1" height="105" width="75"/></a>
<br/>
<li><a href="man.pdf">The ProofWeb manual .pdf</a></li>
<br/>
<li><a href="manual.php">The ProofWeb manual .html</a></li>
<br/>
<li><a href="manual-fol.php">Tips on First Order Logic</a></li>
<li><a href="manual-prop.php">Tips on Propositional Logic</a></li>
<br/>
<li><a href="tutorial-video.htm">VIDEO TUTORIAL</a></li>
<br/>
</div>

<br/>
<h2>What is ProofWeb?</h2>

<p>
ProofWeb is both a system for <a href="#logic">teaching logic</a>
and for <a href="#provers">using proof assistants</a> through the web.
</p>

<p>ProofWeb can be used in three ways.
First, one can use the guest login, for which one
does not even need to register.
Secondly, a user can be a student in a logic or proof assistants course.
We are hosting courses free of charge.
If you are a teacher and would like to host your course on this server,
send email to <a href="mailto:proofweb@cs.ru.nl">proofweb@cs.ru.nl</a>.
Thirdly, if teachers do not want to trust us with their students' files, they can freely download
the ProofWeb system and run it on a server of their own.
</p>

<hr/>

<p>
<li>For problems about the course and the proof assistant, email <b>ptrckphilo (at) gmail.com</b></li>
<li>For questions about the course and the proof assistant, email <b>jmarcos (at) dimap.ufrn.br</b></li>

<li><b>Disclaimer.</b> Please use Mozilla, Firefox, Galeon, Epiphany or Netscape >= 6. <br>
  With other browsers some or all features are missing.
</li>
</p>

<h2>About ProofWeb</h2>

<center>
<table><tr><td width="116" align="center">
<a href="http://www.cs.ru.nl/~cek/"><img src="pics/cezary.jpg" alt="Cezary" border="0" height="149"/></a>
</td><td width="116" align="center">
<a href="http://www.win.tue.nl/~maxim/"><img src="pics/maxim.jpg" alt="Maxim" border="0" height="149"/></a>
</td><td width="116" align="center">
<a href="http://www.cs.ru.nl/~freek/"><img src="pics/freek.jpg" alt="Freek" border="0" height="149"/></a>
</td><td width="116" align="center">
<a href="http://www.cs.vu.nl/~femke/"><img src="pics/femke.jpg" alt="Femke" border="0" height="149"/></a>
</td><td width="116" align="center">
<a href="http://www.cs.ru.nl/~wupper/"><img src="pics/hanno.jpg" alt="Hanno" border="0" height="149"/></a>
</td><td width="116" align="center">
<a href="http://www.cs.vu.nl/~rdv/"><img src="pics/roel.jpg" alt="Roel" border="0" height="149"/></a>
</td></tr>
<tr><td width="116" align="center">
<a href="http://www.cs.ru.nl/~cek/">Cezary</a>
</td><td width="116" align="center">
<a href="http://www.win.tue.nl/~maxim/">Maxim</a>
</td><td width="116" align="center">
<a href="http://www.cs.ru.nl/~freek/">Freek</a>
</td><td width="116" align="center">
<a href="http://www.cs.vu.nl/~femke/">Femke</a>
</td><td width="116" align="center">
<a href="http://www.cs.ru.nl/~wupper/">Hanno</a>
</td><td width="116" align="center">
<a href="http://www.cs.vu.nl/~rdv/">Roel</a>
</td></tr></table>
</center>

<p></p>

<center>
<table><tr><td width="360" align="center">
<ul>
<li><a href="pubs.php">Publications</a></li>
<li><a href="impl.php">Technical details</a></li>
</ul>
</td></tr></table>
</center>

<p>ProofWeb was developed in 2006 and 2007 in the education innovation project <a href="http://www.surffoundation.nl/smartsite.dws?id=12104&amp;fs=1">Web deduction for education in formal thinking</a> which was financed
by <a href="http://www.surffoundation.nl/">Surf Foundation</a>, the <a href="http://www.ru.nl/">Radboud University Nijmegen</a> and the <a href="http://www.vu.nl/">Free University Amsterdam</a>.
The main developer of the system was Cezary Kaliszyk, after ideas by Freek Wiedijk.
The ProofWeb exercise database and a first version of the natural deduction
tactics were developed by Maxim Hendriks.
ProofWeb was refined based on experiences with the system
in the courses of Femke van Raamsdonk, Hanno Wupper and Roel de Vrijer.
</p>

</ul>

<hr />

<h4>Teacher login:</h4>
<form action="auth-cgi.php" method="post">
<table><tr><td>Username:</td>
<td><input type="edit" name="login" value=""></td></tr>
<tr><td>Password:</td><td>
<input type="password" name="pass" value="">
</td></tr>
        <tr>
        <td>Course:</td>
        <td>
                <select name="course">

                <option value="FMC3-2018.1">[2018.1] FMC3 - UFRN</option>
           <!--     <option value="UFRN/2013.1/LOMat">[2013.1] UFRN - Lógica (Matemática)</option>
                <option value="UFRN/2013.1/LA">[2013.1] UFRN - 24M56 - Lógica Aplicada à Computação</option>
                <option value="UFRN/2012.1/LA/M34">[2012.1] UFRN - 24M34 - Lógica Aplicada à Computação</option>
                <option value="UFRN/2012.1/LA/M56">[2012.1] UFRN - 24M56 - Lógica Aplicada à Computação</option> -->
                </select>
        </td>
        </tr>
</table>
<input type="submit" value="GO TO ADMIN PAGE">
</form>

<br/>

