<?php include("header.php"); ?>


<h3>Motivation</h3>

<p>The initial idea came from <a href="http://www.cs.ru.nl/~henk/">Henk Barendregt</a>, 
who envisioned a web-portal for formalization of mathematics, that would include Wiki 
functionality. We already had proof checkers, and libraries for them, but there were 
no useful web interfaces to them. Possible uses of our the interface already include:</p>

<ul>

  <li>See a proof assistant, experimental feature or library without installing it</li>
  <li>Have interactive proofs on web pages</li>
  <li>Cooperation in proof development (proofs are saved on the server, so no versioning system
    is necessary)</li>
</ul>

<h3>Implementation</h3>
<p>The system consists of a server part and a client part:</p>

<ul>

  <li>The client part is 30kB of Javascript. It is downloaded by the client's browser 
    when a user accesses the web page. Most of it are routines for managing the 
    buffer, locking the already verified statements and finding whole expressions.</li>
  <li>The server is about 1000 lines of <a href="http://caml.inria.fr">OCaml</a> code, 
    which is a web-server, that runs coqtop subprocesses.</li>
</ul>


<h3>Security</h3> 
<p>Security is particularly important in a centralized
approach. The current implementation already provides security by the
following means:</p>

<ul>
  <li>Minimal chrooted environment</li>
  <li>Runs as a user with no permissions</li>
  <li>Dropping to ML toplevel is disabled where possible</li>
</ul>

<p>Possible other security enhancements include cpu, memory and disc quotas, further 
virtualization (Xen and similar solutions) and automatic recreation of the filesystem.</p>

<h3>Other provers</h3>

<p>The interface has been initially created as a web interface for Coq, then for Isabelle
and now includes preliminary support for Lego, Plastic, Matita and Hol Light. The 
functionality that is prover specific is:</p>

<ul>
  <li>Client part: Recognition of expressions that need to be sent to the server that are not
    in comments or quotes</li>
  <li>Server part: Interaction with the server process, in particular checking if a given command
    succeeded or failed, and knowing how to undo (Backtrack)</li>
</ul>

<p>In principle adapting the interface to work with a prover with which proof-general is able to
work, should be straight-forward. </p>

<h3>Ideas and suggestions (more are welcome)</h3>
<ul>
  <li>Combine it with a Wiki</li>
  <li>HELM / WHELP / CoqDoc / Syntax Highlighting</li>
  <li>Do more tests with Internet Explorer (jumping cursor?)</li>
  <li>Stopping Prover (Ctrl-C)</li>
  <li>Hide prompt and toplevel in errors</li>

  <li>Local download/upload and file listing</li>
  <li>Using Unicode in proofs and not only in comments</li>
  <li>Two browser sessions editing the same file</li>
  <li>Autoscroll (not sure if possible)</li>
</ul>
