<?php include("header.php"); ?>

<P>

<H2><A NAME="SECTION00010000000000000000">
Working with ProofWeb</A>
</H2>

<P>

<OL>
<LI>Go to the web page
<DIV ALIGN="CENTER">
<TT>http://prover.cs.ru.nl/</TT>
<br/> OR
<br/>
<TT>http://lolita.dimap.ufrn.br/proofweb</TT>

</DIV>
(ProofWeb does not work in all browsers.  Firefox should be okay.)

<P>
</LI>
<LI>Click on the name of your course near the bottom of the page.

<P>
</LI>
<LI>Log in using your username and password.
(Ask your teacher for this information if you do not know it yet.)

<P>
</LI>
<LI>Click on the button of the problem that you want to work on.

<P>
</LI>
<LI>Select from the <TT>Display</TT> menu the item
<DIV ALIGN="CENTER">
<TT>Box proofs</TT>

</DIV>

<P>
</LI>
<LI>(Possibly select from the <TT>Debug</TT> menu the item
<DIV ALIGN="CENTER">
<TT>Toggle Electric Terminator</TT>

</DIV>
This will make the commands execute automatically every time you
type a period character (`<SPAN ID="hue"><TT>.</TT></SPAN>').
Else you will need to click on the down arrow or type <SPAN  CLASS="textit">control-down</SPAN>
to execute commands.)

<P>
</LI>
<LI>Click on the down arrow or type <SPAN  CLASS="textit">control-down</SPAN> until you have
executed the
<DIV ALIGN="CENTER">
<TT>Proof.</TT>

</DIV>
line after the <TT>Theorem</TT> line.
Now you will be able to work on a proof.
When you are doing this, the incomplete version of the proof will be shown on the lower right.

<P>
</LI>
<LI>Replace the
<DIV ALIGN="CENTER">
<TT>(*! prop&#95;proof *)</TT>

</DIV>
comment with a sequence of tactics as described on the next
pages.
If you did not toggle the electric terminator, execute these tactics by clicking the down arrow repeatedly
(or by typing <SPAN  CLASS="textit">control-down</SPAN> repeatedly.)

<P>
</LI>
<LI>You can also enter tactics by selecting items from the <TT>Template</TT>, <TT>Backward</TT> and <TT>Forward</TT> menus.
Replace the question marks (`<SPAN ID="hue"><TT>?</TT></SPAN>') by labels,
formulas and terms and add a period after the command.
After you did so click the down arrow or type <SPAN  CLASS="textit">control-down</SPAN>.

<P>
</LI>
<LI>You can edit the part of the text that has not yet been executed (the part
that has been executed will be green).
To undo steps in the proof click the up arrow or type <SPAN  CLASS="textit">control-up</SPAN>.

<P>
</LI>
<LI>If you have problems with ProofWeb, or want to exchange experiences,
use the ProofWeb forum on the discussion board (on `Blackboard') of your course.

<P>
</LI>
</OL>

<P>

<P>

<H1><A NAME="SECTION00020000000000000000">
Example</A>
</H1>
<BR>
&nbsp;
<BR>
<H2><A NAME="SECTION00021000000000000000">
Formula</A>
</H2>
<BR><P></P>
<DIV ALIGN="CENTER" CLASS="mathdisplay">
<!-- MATH
 \begin{displaymath}
(A \land B) \to A
\end{displaymath}
 -->

<IMG
 WIDTH="90" HEIGHT="28" BORDER="0"
 SRC="man/img1.png"
 ALT="\begin{displaymath}(A \land B) \to A\end{displaymath}">
</DIV>
<BR CLEAR="ALL">
<P></P>

<P>

<H2><A NAME="SECTION00022000000000000000">
Exercise</A>
</H2>
<PRE>
(* Exercise 1 *)

Require Import ProofWeb.

Variables A B : Prop.

Theorem prop_001 : (A /\ B) -&gt; A.
Proof.
(*! prop_proof *)

Qed.
</PRE>

<P>

<H2><A NAME="SECTION00023000000000000000">
Solution</A>
</H2>
<PRE>
(* Exercise 1 *)

Require Import ProofWeb.

Variables A B : Prop.

Theorem prop_001 : (A /\ B) -&gt; A.
Proof.
imp_i H.
f_con_e1 H.
Qed.
</PRE>

<P>

<H2><A NAME="SECTION00024000000000000000">
Proof</A>
</H2>
<DIV ALIGN="LEFT">
<TABLE CELLPADDING=3>
<TR><TD ALIGN="LEFT"> 1</TD>
<TD></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img2.png"
 ALT="$A \land B$"></SPAN></TD>
<TD ALIGN="LEFT" COLSPAN=1><SPAN>assumption</SPAN></TD>
</TR>
<TR><TD ALIGN="LEFT"> 2</TD>
<TD></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT" COLSPAN=1><SPAN><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img4.png"
 ALT="$\land$"></SPAN>e<SPAN CLASS="MATH"><IMG
 WIDTH="12" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img5.png"
 ALT="$_1$"></SPAN> 1</SPAN></TD>
</TR>
<TR><TD ALIGN="LEFT"> 3</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT"><!-- MATH
 $A \land B \to A$
 -->
<SPAN CLASS="MATH"><IMG
 WIDTH="84" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img6.png"
 ALT="$A \land B \to A$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN>i 1--2</TD>
</TR>
</TABLE>
</DIV>

<P>

<H2><A NAME="SECTION00025000000000000000">
Rendering in ProofWeb</A>
</H2>
<DIV ALIGN="LEFT"><TABLE CELLPADDING=3>
<TR><TD ALIGN="LEFT"><TT>

1 </TT></TD>
<TD ALIGN="LEFT" COLSPAN=1><TT> <SPAN><SPAN ID="hue">H:</SPAN></SPAN> </TT></TD>
<TD ALIGN="LEFT"><TT> A <SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img4.png"
 ALT="$\land$"></SPAN> B </TT></TD>
<TD ALIGN="LEFT"><TT> assumption </TT></TD>
</TR>
<TR><TD ALIGN="LEFT"><TT> 
2 </TT></TD>
<TD></TD>
<TD ALIGN="LEFT"><TT> A </TT></TD>
<TD ALIGN="LEFT"><TT> <SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img4.png"
 ALT="$\land$"></SPAN>e<SPAN CLASS="MATH"><IMG
 WIDTH="12" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img5.png"
 ALT="$_1$"></SPAN> 1 </TT></TD>
</TR>
<TR><TD ALIGN="LEFT"><TT> 

3 </TT></TD>
<TD></TD>
<TD ALIGN="LEFT"><TT> A <SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img4.png"
 ALT="$\land$"></SPAN> B <SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN> A </TT></TD>
<TD ALIGN="LEFT"><TT> <SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN>i 1-2
</TT></TD>
</TR>
</TABLE></DIV>

<P>

<P>

<P>

<H1><A NAME="SECTION00030000000000000000">
Formula syntax</A>
</H1>
 
<DIV ALIGN="CENTER">
<TABLE CELLPADDING=3>
<TR><TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img8.png"
 ALT="$\bot$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="LEFT"><TT>False</TT></TD>
</TR>
<TR><TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img9.png"
 ALT="$\top$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="LEFT"><TT>True</TT></TD>
</TR>
<TR><TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="27" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img10.png"
 ALT="$\neg A$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="LEFT"><TT>~</TT><SPAN CLASS="MATH"><IMG
 WIDTH="21" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img11.png"
 ALT="$\;A$"></SPAN></TD>
</TR>
<TR><TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img2.png"
 ALT="$A \land B$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN><TT> /&#92; </TT><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
</TR>
<TR><TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img13.png"
 ALT="$A \lor B$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN><TT> &#92;/ </TT><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
</TR>
<TR><TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img14.png"
 ALT="$A \to B$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN><TT> -&gt; </TT><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
</TR>
<TR><TD ALIGN="CENTER"><!-- MATH
 $A \leftrightarrow B$
 -->
<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img15.png"
 ALT="$A \leftrightarrow B$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN><TT> &lt;-&gt; </TT><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
</TR>
<TR><TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img16.png"
 ALT="$\forall x\, A$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="LEFT"><TT>all </TT><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img17.png"
 ALT="$x$"></SPAN><TT>, </TT><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
</TR>
<TR><TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img18.png"
 ALT="$\exists x\, A$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="LEFT"><TT>exi </TT><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img17.png"
 ALT="$x$"></SPAN><TT>, </TT><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
</TR>
</TABLE>
</DIV>

<P>
When formulas that are not single identifiers are used as arguments of tactics, they need to be put in brackets.

<P>
The `<TT>all</TT>' and `<TT>exi</TT>' quantifiers bind more strongly
than the built-in Coq quantifiers `<TT>forall</TT>' and `<TT>exists</TT>'.

<P>
The `<TT>all</TT>' and `<TT>exi</TT>' internally use a function `<TT>&#95;K</TT>'.
If through a bug in one of the tactics this function ever appears in a goal, one should
use the tactic `<TT>remove&#95;K</TT>' to get rid of it (and report the bug).

<P>

<P>

<H1><A NAME="SECTION00040000000000000000">
Tactics</A>
</H1>

<P>
The green `H' labels that occur in these descriptions are not part of the way proofs are written in Huth &amp; Ryan,
but are necessary for working in ProofWeb.
They are the symbolic equivalents (which stay the same throughout the proof process) of the line numbers (which change all the time).

<P>

<H2><A NAME="SECTION00041000000000000000">
Structural tactics</A>
</H2>

<P>
<DIV ALIGN="CENTER">
<TABLE CELLPADDING=3 BORDER="0">
<TR><TD ALIGN="LEFT"> <SPAN ID="hue"><TT>exact H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">copy <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN ID="hue"><TT>insert H <SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
</TABLE>
</DIV>

<P>

<H2><A NAME="SECTION00042000000000000000">
Backward tactics</A>
</H2>

<P>
The tactic names may be prefixed with<SPAN ID="hue"><TT> b&#95;</TT>...</SPAN> to contrast them to the corresponding forward tactics.

<P>
Rules that are not intuitionistically valid are marked with a star.
Rules that according to Huth &amp; Ryan are derived rules are marked with a dagger.

<P>
<DIV ALIGN="CENTER">
<TABLE CELLPADDING=3 BORDER="0">
<TR><TD ALIGN="LEFT"> <SPAN  CLASS="textit">conjunction introduction</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>con&#95;i</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img2.png"
 ALT="$A \land B$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img24.png"
 ALT="$n + 2$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img2.png"
 ALT="$A \land B$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img4.png"
 ALT="$\land$"></SPAN>i <SPAN CLASS="MATH"><IMG
 WIDTH="70" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img25.png"
 ALT="$n,(n + 1)$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">conjunction elimination left</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>con&#95;e1 <SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img2.png"
 ALT="$A \land B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img4.png"
 ALT="$\land$"></SPAN>e<SPAN CLASS="MATH"><IMG
 WIDTH="12" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img5.png"
 ALT="$_1$"></SPAN> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
</TABLE>
</DIV>

<DIV ALIGN="CENTER">
<TABLE CELLPADDING=3 BORDER="0">
<TR><TD ALIGN="LEFT"> <SPAN  CLASS="textit">conjunction elimination right</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>con&#95;e2 <SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img2.png"
 ALT="$A \land B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img4.png"
 ALT="$\land$"></SPAN>e<SPAN CLASS="MATH"><IMG
 WIDTH="12" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img26.png"
 ALT="$_2$"></SPAN> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">disjunction introduction left</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>dis&#95;i1</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img13.png"
 ALT="$A \lor B$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img13.png"
 ALT="$A \lor B$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img27.png"
 ALT="$\lor$"></SPAN>i<SPAN CLASS="MATH"><IMG
 WIDTH="12" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img5.png"
 ALT="$_1$"></SPAN> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">disjunction introduction right</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>dis&#95;i2</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img13.png"
 ALT="$A \lor B$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img13.png"
 ALT="$A \lor B$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img27.png"
 ALT="$\lor$"></SPAN>i<SPAN CLASS="MATH"><IMG
 WIDTH="12" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img5.png"
 ALT="$_1$"></SPAN> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">disjunction elimination</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>dis&#95;e (<SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN> &#92;/ <SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN>) H1 H2</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img13.png"
 ALT="$A \lor B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="LEFT" COLSPAN=1><SPAN>H1</SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">assumption</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD></TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img24.png"
 ALT="$n + 2$"></SPAN></TD>
<TD></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img28.png"
 ALT="$C$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img29.png"
 ALT="$n + 3$"></SPAN></TD>
<TD ALIGN="LEFT" COLSPAN=1><SPAN>H2</SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT">assumption</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD></TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img30.png"
 ALT="$n + 4$"></SPAN></TD>
<TD></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img28.png"
 ALT="$C$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img28.png"
 ALT="$C$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img31.png"
 ALT="$n + 5$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img28.png"
 ALT="$C$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img27.png"
 ALT="$\lor$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN>,<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img32.png"
 ALT="$(n + 1)$"></SPAN>--<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img33.png"
 ALT="$(n + 2)$"></SPAN>,<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img34.png"
 ALT="$(n + 3)$"></SPAN>--<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img35.png"
 ALT="$(n + 4)$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">implication introduction</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>imp&#95;i H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT" COLSPAN=1><SPAN>H</SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">assumption</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD></TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img14.png"
 ALT="$A \to B$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img24.png"
 ALT="$n + 2$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img14.png"
 ALT="$A \to B$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN>i <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN>--<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img32.png"
 ALT="$(n + 1)$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
</TABLE>
</DIV>

<DIV ALIGN="CENTER">
<TABLE CELLPADDING=3 BORDER="0">
<TR><TD ALIGN="LEFT"> <SPAN  CLASS="textit">implication elimination</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>imp&#95;e <SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img14.png"
 ALT="$A \to B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img24.png"
 ALT="$n + 2$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="70" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img25.png"
 ALT="$n,(n + 1)$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">negation introduction</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>neg&#95;i H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT" COLSPAN=1><SPAN>H</SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">assumption</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD></TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img8.png"
 ALT="$\bot$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="27" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img10.png"
 ALT="$\neg A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img24.png"
 ALT="$n + 2$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="27" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img10.png"
 ALT="$\neg A$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img36.png"
 ALT="$\neg$"></SPAN>i <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN>--<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img32.png"
 ALT="$(n + 1)$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">negation elimination</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>neg&#95;e <SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="27" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img10.png"
 ALT="$\neg A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img8.png"
 ALT="$\bot$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img24.png"
 ALT="$n + 2$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img8.png"
 ALT="$\bot$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img36.png"
 ALT="$\neg$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="70" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img25.png"
 ALT="$n,(n + 1)$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">falsum elimination</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>fls&#95;e</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img8.png"
 ALT="$\bot$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img8.png"
 ALT="$\bot$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">truth introduction</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>tru&#95;i</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img9.png"
 ALT="$\top$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img9.png"
 ALT="$\top$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img9.png"
 ALT="$\top$"></SPAN>i <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">double negation introduction</SPAN><SPAN CLASS="MATH"><IMG
 WIDTH="11" HEIGHT="20" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img37.png"
 ALT="$^\dagger$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>negneg&#95;i</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="38" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img38.png"
 ALT="$\neg\neg A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="38" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img38.png"
 ALT="$\neg\neg A$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img39.png"
 ALT="$\neg\neg$"></SPAN>i <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
</TABLE>
</DIV>

<DIV ALIGN="CENTER">
<TABLE CELLPADDING=3 BORDER="0">
<TR><TD ALIGN="LEFT"> <SPAN  CLASS="textit">double negation elimination</SPAN>*</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>negneg&#95;e</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="38" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img38.png"
 ALT="$\neg\neg A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img39.png"
 ALT="$\neg\neg$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">law of excluded middle</SPAN>*<SPAN CLASS="MATH"><IMG
 WIDTH="11" HEIGHT="20" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img37.png"
 ALT="$^\dagger$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>LEM</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="57" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img40.png"
 ALT="$A \lor \neg A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="57" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img40.png"
 ALT="$A \lor \neg A$"></SPAN></TD>
<TD ALIGN="LEFT">LEM</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">proof by contradiction</SPAN>*<SPAN CLASS="MATH"><IMG
 WIDTH="11" HEIGHT="20" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img37.png"
 ALT="$^\dagger$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>PBC H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT" COLSPAN=1><SPAN>H</SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="27" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img10.png"
 ALT="$\neg A$"></SPAN></TD>
<TD ALIGN="LEFT">assumption</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD></TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img8.png"
 ALT="$\bot$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img24.png"
 ALT="$n + 2$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">PBC <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN>--<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img32.png"
 ALT="$(n + 1)$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">modus tollens</SPAN><SPAN CLASS="MATH"><IMG
 WIDTH="11" HEIGHT="20" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img37.png"
 ALT="$^\dagger$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>MT <SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img14.png"
 ALT="$A \to B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="28" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img41.png"
 ALT="$\neg B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="27" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img10.png"
 ALT="$\neg A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img24.png"
 ALT="$n + 2$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="27" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img10.png"
 ALT="$\neg A$"></SPAN></TD>
<TD ALIGN="LEFT">MT <SPAN CLASS="MATH"><IMG
 WIDTH="70" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img25.png"
 ALT="$n,(n + 1)$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">universal introduction</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>all&#95;i <SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img42.png"
 ALT="$y$"></SPAN></TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT" COLSPAN=1><SPAN><SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img42.png"
 ALT="$y$"></SPAN></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD></TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="51" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img43.png"
 ALT="$A[y/x]$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img16.png"
 ALT="$\forall x\, A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img16.png"
 ALT="$\forall x\, A$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img44.png"
 ALT="$\forall$"></SPAN>i <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN>--<SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">universal elimination</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>all&#95;e (all x, <SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN>)</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img16.png"
 ALT="$\forall x\, A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="48" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img45.png"
 ALT="$A[t/x]$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="48" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img45.png"
 ALT="$A[t/x]$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img44.png"
 ALT="$\forall$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
</TABLE>
</DIV>

<DIV ALIGN="CENTER">
<TABLE CELLPADDING=3 BORDER="0">
<TR><TD ALIGN="LEFT"> <SPAN  CLASS="textit">existential introduction</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>exi&#95;i <SPAN CLASS="MATH"><IMG
 WIDTH="10" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img46.png"
 ALT="$t$"></SPAN></TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="48" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img45.png"
 ALT="$A[t/x]$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img18.png"
 ALT="$\exists x\, A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img18.png"
 ALT="$\exists x\, A$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img47.png"
 ALT="$\exists$"></SPAN>i <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">existential elimination</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>exi&#95;e (exi x, <SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN>) <SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img42.png"
 ALT="$y$"></SPAN> H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img18.png"
 ALT="$\exists x\, A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT" COLSPAN=1><SPAN><SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img42.png"
 ALT="$y$"></SPAN></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="LEFT" COLSPAN=1><SPAN>H</SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="51" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img43.png"
 ALT="$A[y/x]$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD></TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img24.png"
 ALT="$n + 2$"></SPAN></TD>
<TD></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img29.png"
 ALT="$n + 3$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img47.png"
 ALT="$\exists$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN>,<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img32.png"
 ALT="$(n + 1)$"></SPAN>--<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img33.png"
 ALT="$(n + 2)$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">equality introduction</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>equ&#95;i</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img48.png"
 ALT="$t = t$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img48.png"
 ALT="$t = t$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img49.png"
 ALT="$=$"></SPAN>i</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">equality elimination, simple version</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>equ&#95;e (<SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img50.png"
 ALT="$t_1$"></SPAN> = <SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img51.png"
 ALT="$t_2$"></SPAN>)</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="51" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img52.png"
 ALT="$t_1 = t_2$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="55" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img53.png"
 ALT="$A[t_1/x]$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="55" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img54.png"
 ALT="$A[t_2/x]$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img24.png"
 ALT="$n + 2$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="55" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img54.png"
 ALT="$A[t_2/x]$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img49.png"
 ALT="$=$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="70" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img25.png"
 ALT="$n,(n + 1)$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">equality elimination, general version</SPAN> (<SPAN  CLASS="textit"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img51.png"
 ALT="$t_2$"></SPAN> may occur in <SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></SPAN>)</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>equ&#95;e' (<SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img50.png"
 ALT="$t_1$"></SPAN> = <SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img51.png"
 ALT="$t_2$"></SPAN>) (fun x =&gt; <SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN>)</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="51" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img52.png"
 ALT="$t_1 = t_2$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="55" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img53.png"
 ALT="$A[t_1/x]$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="55" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img54.png"
 ALT="$A[t_2/x]$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img24.png"
 ALT="$n + 2$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="55" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img54.png"
 ALT="$A[t_2/x]$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img49.png"
 ALT="$=$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="70" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img25.png"
 ALT="$n,(n + 1)$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
</TABLE>
</DIV>

<P>

<H2><A NAME="SECTION00043000000000000000">
Forward tactics</A>
</H2>
 
<DIV ALIGN="CENTER">
<TABLE CELLPADDING=3 BORDER="0">
<TR><TD ALIGN="LEFT"> <SPAN  CLASS="textit">conjunction introduction</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;con&#95;i H1 H2</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img55.png"
 ALT="$m_1$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H1</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img55.png"
 ALT="$m_1$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H1</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img56.png"
 ALT="$m_2$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H2</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img56.png"
 ALT="$m_2$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H2</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img2.png"
 ALT="$A \land B$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img2.png"
 ALT="$A \land B$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img4.png"
 ALT="$\land$"></SPAN>i <SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img57.png"
 ALT="$m_1,m_2$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">conjunction elimination left</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;con&#95;e1 H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img2.png"
 ALT="$A \land B$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img2.png"
 ALT="$A \land B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img4.png"
 ALT="$\land$"></SPAN>e<SPAN CLASS="MATH"><IMG
 WIDTH="12" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img5.png"
 ALT="$_1$"></SPAN> <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">conjunction elimination right</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;con&#95;e2 H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img2.png"
 ALT="$A \land B$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img2.png"
 ALT="$A \land B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img4.png"
 ALT="$\land$"></SPAN>e<SPAN CLASS="MATH"><IMG
 WIDTH="12" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img26.png"
 ALT="$_2$"></SPAN> <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">disjunction introduction left</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;dis&#95;i1 H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img13.png"
 ALT="$A \lor B$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img13.png"
 ALT="$A \lor B$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img27.png"
 ALT="$\lor$"></SPAN>i<SPAN CLASS="MATH"><IMG
 WIDTH="12" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img5.png"
 ALT="$_1$"></SPAN> <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">disjunction introduction right</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;dis&#95;i2 H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img13.png"
 ALT="$A \lor B$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img13.png"
 ALT="$A \lor B$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img27.png"
 ALT="$\lor$"></SPAN>i<SPAN CLASS="MATH"><IMG
 WIDTH="12" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img26.png"
 ALT="$_2$"></SPAN> <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
</TABLE>
</DIV>

<DIV ALIGN="CENTER">
<TABLE CELLPADDING=3 BORDER="0">
<TR><TD ALIGN="LEFT"> <SPAN  CLASS="textit">disjunction elimination</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;dis&#95;e H H1 H2</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT">H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img13.png"
 ALT="$A \lor B$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT">H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="47" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img13.png"
 ALT="$A \lor B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT" COLSPAN=1><SPAN>H1</SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">assumption</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD></TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img28.png"
 ALT="$C$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img24.png"
 ALT="$n + 2$"></SPAN></TD>
<TD ALIGN="RIGHT" COLSPAN=1><SPAN>H2</SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT">assumption</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD></TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img29.png"
 ALT="$n + 3$"></SPAN></TD>
<TD></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img28.png"
 ALT="$C$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img28.png"
 ALT="$C$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img30.png"
 ALT="$n + 4$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img28.png"
 ALT="$C$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img27.png"
 ALT="$\lor$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN>,<SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN>--<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img32.png"
 ALT="$(n + 1)$"></SPAN>,<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img33.png"
 ALT="$(n + 2)$"></SPAN>--<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img34.png"
 ALT="$(n + 3)$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">implication elimination</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;imp&#95;e H1 H2</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img55.png"
 ALT="$m_1$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H1</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img14.png"
 ALT="$A \to B$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img55.png"
 ALT="$m_1$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H1</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img14.png"
 ALT="$A \to B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img56.png"
 ALT="$m_2$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H2</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img56.png"
 ALT="$m_2$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H2</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img57.png"
 ALT="$m_1,m_2$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">negation elimination</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;neg&#95;e H1 H2</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img55.png"
 ALT="$m_1$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H1</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="27" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img10.png"
 ALT="$\neg A$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img55.png"
 ALT="$m_1$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H1</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="27" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img10.png"
 ALT="$\neg A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img56.png"
 ALT="$m_2$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H2</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img56.png"
 ALT="$m_2$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H2</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img8.png"
 ALT="$\bot$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img8.png"
 ALT="$\bot$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="15" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img36.png"
 ALT="$\neg$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img57.png"
 ALT="$m_1,m_2$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">falsum elimination</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;fls&#95;e H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img8.png"
 ALT="$\bot$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img8.png"
 ALT="$\bot$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img8.png"
 ALT="$\bot$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
</TABLE>
</DIV>

<DIV ALIGN="CENTER">
<TABLE CELLPADDING=3 BORDER="0">
<TR><TD ALIGN="LEFT"> <SPAN  CLASS="textit">truth introduction</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;tru&#95;i</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img9.png"
 ALT="$\top$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img9.png"
 ALT="$\top$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img9.png"
 ALT="$\top$"></SPAN>i <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">double negation introduction</SPAN><SPAN CLASS="MATH"><IMG
 WIDTH="11" HEIGHT="20" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img37.png"
 ALT="$^\dagger$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;negneg&#95;i H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="38" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img38.png"
 ALT="$\neg\neg A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="38" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img38.png"
 ALT="$\neg\neg A$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img39.png"
 ALT="$\neg\neg$"></SPAN>i <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">double negation elimination</SPAN>*</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;negneg&#95;e H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="38" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img38.png"
 ALT="$\neg\neg A$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="38" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img38.png"
 ALT="$\neg\neg A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="16" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img3.png"
 ALT="$A$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img39.png"
 ALT="$\neg\neg$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">law of excluded middle</SPAN>*<SPAN CLASS="MATH"><IMG
 WIDTH="11" HEIGHT="20" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img37.png"
 ALT="$^\dagger$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;LEM</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="57" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img40.png"
 ALT="$A \lor \neg A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="57" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img40.png"
 ALT="$A \lor \neg A$"></SPAN></TD>
<TD ALIGN="LEFT">LEM</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">modus tollens</SPAN><SPAN CLASS="MATH"><IMG
 WIDTH="11" HEIGHT="20" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img37.png"
 ALT="$^\dagger$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;MT H1 H2</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img55.png"
 ALT="$m_1$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H1</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img14.png"
 ALT="$A \to B$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img55.png"
 ALT="$m_1$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H1</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img14.png"
 ALT="$A \to B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img56.png"
 ALT="$m_2$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H2</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="28" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img41.png"
 ALT="$\neg B$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img56.png"
 ALT="$m_2$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H2</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="28" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img41.png"
 ALT="$\neg B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="27" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img10.png"
 ALT="$\neg A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="27" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img10.png"
 ALT="$\neg A$"></SPAN></TD>
<TD ALIGN="LEFT">MT <SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img57.png"
 ALT="$m_1,m_2$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">universal elimination</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;all&#95;e H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img16.png"
 ALT="$\forall x\, A$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img16.png"
 ALT="$\forall x\, A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="48" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img45.png"
 ALT="$A[t/x]$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="48" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img45.png"
 ALT="$A[t/x]$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img44.png"
 ALT="$\forall$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
</TABLE>
</DIV>

<DIV ALIGN="CENTER">
<TABLE CELLPADDING=3 BORDER="0">
<TR><TD ALIGN="LEFT"> <SPAN  CLASS="textit">existential introduction</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;exi&#95;i H</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="48" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img45.png"
 ALT="$A[t/x]$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="48" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img45.png"
 ALT="$A[t/x]$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img18.png"
 ALT="$\exists x\, A$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img18.png"
 ALT="$\exists x\, A$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img47.png"
 ALT="$\exists$"></SPAN>i <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">existential elimination</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;exi&#95;e H <SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img42.png"
 ALT="$y$"></SPAN> H1</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT">H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img18.png"
 ALT="$\exists x\, A$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN></TD>
<TD ALIGN="RIGHT">H</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img18.png"
 ALT="$\exists x\, A$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT" COLSPAN=1><SPAN><SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img42.png"
 ALT="$y$"></SPAN></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT" COLSPAN=1><SPAN>H1</SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="51" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img43.png"
 ALT="$A[y/x]$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD></TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img23.png"
 ALT="$n + 1$"></SPAN></TD>
<TD></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD></TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="41" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img24.png"
 ALT="$n + 2$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img12.png"
 ALT="$B$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="13" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img47.png"
 ALT="$\exists$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="18" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img19.png"
 ALT="$m$"></SPAN>,<SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN>--<SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img32.png"
 ALT="$(n + 1)$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">equality introduction</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;equ&#95;i</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img48.png"
 ALT="$t = t$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="37" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img48.png"
 ALT="$t = t$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img49.png"
 ALT="$=$"></SPAN>i</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P>

 <SPAN  CLASS="textit">equality elimination</SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><SPAN ID="hue"><TT>f&#95;equ&#95;e H1 H2</TT></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img55.png"
 ALT="$m_1$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H1</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="51" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img52.png"
 ALT="$t_1 = t_2$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img55.png"
 ALT="$m_1$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H1</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="51" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img52.png"
 ALT="$t_1 = t_2$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

 <SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img56.png"
 ALT="$m_2$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H2</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="55" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img53.png"
 ALT="$A[t_1/x]$"></SPAN></TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="26" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img56.png"
 ALT="$m_2$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="9" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img20.png"
 ALT="$\;$"></SPAN>H2</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="55" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img53.png"
 ALT="$A[t_1/x]$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P>
<BR>

</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">...</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"> <SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="55" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img54.png"
 ALT="$A[t_2/x]$"></SPAN></TD>
<TD ALIGN="CENTER"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN><BIG CLASS="XXLARGE"><SPAN ID="hue"><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img7.png"
 ALT="$\to$"></SPAN></SPAN></BIG><SPAN CLASS="MATH"><IMG
 WIDTH="20" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img22.png"
 ALT="$\quad$"></SPAN></TD>
<TD ALIGN="RIGHT"><SPAN CLASS="MATH"><IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img21.png"
 ALT="$n$"></SPAN></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="55" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img54.png"
 ALT="$A[t_2/x]$"></SPAN></TD>
<TD ALIGN="LEFT"><SPAN CLASS="MATH"><IMG
 WIDTH="17" HEIGHT="15" ALIGN="BOTTOM" BORDER="0"
 SRC="man/img49.png"
 ALT="$=$"></SPAN>e <SPAN CLASS="MATH"><IMG
 WIDTH="54" HEIGHT="30" ALIGN="MIDDLE" BORDER="0"
 SRC="man/img57.png"
 ALT="$m_1,m_2$"></SPAN></TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
<TR><TD ALIGN="LEFT"><P></P></TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="CENTER">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="RIGHT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
<TD ALIGN="LEFT">&nbsp;</TD>
</TR>
</TABLE>
</DIV>

<P>

<H1><A NAME="SECTION00050000000000000000">
About this document ...</A>
</H1>
 <P>
This document was generated using the
<A HREF="http://www.latex2html.org/"><STRONG>LaTeX</STRONG>2<tt>HTML</tt></A> translator Version 2002-2-1 (1.71)
<P>
Copyright &#169; 1993, 1994, 1995, 1996,
Nikos Drakos, 
Computer Based Learning Unit, University of Leeds.
<BR>
Copyright &#169; 1997, 1998, 1999,
<A HREF="http://www.maths.mq.edu.au/~ross/">Ross Moore</A>, 
Mathematics Department, Macquarie University, Sydney.
<P>
The command line arguments were: <BR>
 <STRONG>latex2html</STRONG> <TT>-split 0 man.tex</TT>
<P>
The translation was initiated by Cezary Kaliszyk on 2008-01-24

