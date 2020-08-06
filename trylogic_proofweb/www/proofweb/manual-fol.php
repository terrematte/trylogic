<?php include("header.php"); ?>

<P>

<H2><A NAME="SECTION00010000000000000000">
Working with ProofWeb</A>
</H2>
<P>

<H2><A>
Tips on First Ordem Logic</A>
</H2>

<PRE>

Require Import ProofWeb.

<b>(* Ilustração de teoremas em Lógica de Primeira Ordem. *) </b>

Variable P : D -> Prop.
Variable Q : D * D -> Prop.
Variable R : D * D * D -> Prop.

<b>(* Estratégia para trás *) </b>

Theorem exemplo_01 : all x, P(x) -> all y, P(y).
Proof.
imp_i H.
all_i z.
all_e (all x, P(x)).
ass H.
Qed.

<b>(* Estratégia para frente *) </b>

Theorem exemplo_02 : all x, P(x) -> all y, P(y).
Proof.
imp_i H.
all_i z.
f_all_e H.
Qed.

<b>(* O próximo caso pode ser resolvido sem eliminar ou introduzir os           *)</b>
<b>(* quantificadores, uma vez que os nomes das variáveis ligadas não importam. *) </b>

Theorem exemplo_03 : all x, P(x) -> all y, P(y).
Proof.
imp_i H.
ass H.
Qed.

<b>(* O próximo caso só é demonstrável se houver um termo conhecido na linguagem. *)</b>

Variable i : D.

Theorem exemplo_04 : all x, P(x) -> exi x, P(x).
Proof.
imp_i H.
exi_i i.
all_e (all x, P(x)).
ass H.
Qed.

<b>(* Estratégia "Para frente". *)</b>

Theorem exemplo_05 : all x, P(x) -> exi x, P(x).
Proof.
imp_i H.
insert H1 (P(i)).
f_all_e H.
f_exi_i H1.
Qed.

<b>(* Utilizando a Eliminação do Existencial: Para frente *)</b>

Theorem exemplo_06 : exi x, ~P(x) -> ~all x, P(x).
Proof.
imp_i H.
neg_i H1.
exi_e (exi x, ~P(x)) y H2.
ass H.
neg_e (P(y)).
ass H2.
all_e (all x, P(x)).
ass H1.
Qed.

<b>(* Para trás *)</b>

Theorem exemplo_07 : exi x, ~P(x) -> ~all x, P(x).
Proof.
imp_i H.
neg_i H1.
f_exi_e H y H2.
insert H3 (P(y)).
f_all_e H1.
f_neg_e H2 H3.
Qed.


<b>(* Ilustração de estratégia heurística útil. *) </b>

Variable S : D -> Prop.

Hypothesis P1: (all x, P(x)/\exi y, S(y)).

Theorem exemplo_08 : all x, exi y, ( P(x)/\S(y)).
Proof.

<b>(* Sempre tente utilizar primeiro as regras de Introdução do Universal... *) </b>

all_i j.

<b>(* ...e de Eliminação do Existencial. *)</b>

exi_e (exi y, S(y)) k H0.

<b>(* Motivo: Essas regras no ProofWeb introduzem termos que poderão ser       *)</b>
<b>(* utilizados pela Introdução do Existencial e pela Eliminação do Universal *)</b>

f_con_e2 P1.
exi_i k.
con_i.
all_e (all x, P(x)).
f_con_e1 P1.
ass H0.
Qed.
</PRE>

