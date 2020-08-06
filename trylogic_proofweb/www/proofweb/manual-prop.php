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

<b>(* Exemplos na lógica proposicional *)</b>

Variables A B C : Prop.

<b>(*Primeiro uma demonstração usando apenas regras "Backward" 
(para trás - seguindo da conclusão às premissas) *)</b>

Theorem example_01 : A /\ B -> B /\ A.
Proof.
imp_i H.
con_i.
con_e2 (A).

<b>(* Insere um "A" numa conjunção com B *) </b>

ass H.
con_e1 (B).
ass H.
Qed.

<b>(* mesma demonstração usando o máximo de regras "Forward" possíveis 
(para frente - seguindo das premissas à conclusão) *) </b>


Theorem example_02 : A /\ B -> B /\ A.
Proof.
imp_i H.
insert H1 (A).

<b>(* insere a hipótese A para que ela possa ser usada na introdução da conjunção para frente *)</b>

f_con_e1 H.
insert H2 (B).
f_con_e2 H.
f_con_i H2 H1.
Qed.

<b>(* Utilizando táticas mistas  "Forward" e  "Backward" (para frente e para trás) *)</b>

Theorem example_03 : A /\ B -> B /\ A.
Proof.
imp_i H.
con_i.
f_con_e2 H.
f_con_e1 H.
Qed.

<b>(* Um exemplo com a eliminação da disjunção usando apenas táticas "Backward" *)</b>

Theorem example_04 : A \/ B -> B \/ A.
Proof.
imp_i H.
dis_e (A \/ B) H1 H2.
ass H.
dis_i2.
ass H1.
dis_i1.
ass H2.
Qed.

<b>(* ... e uma solução bem menor usando apenas táticas "Forward" *) </b>

Theorem example_05 : A \/ B -> B \/ A.
Proof.
imp_i H.
f_dis_e H H1 H2.

<b>(* Para reduzir o tamanho da derivação, a eliminação da disjunção 
deve ser aplicada antes de outras regras... *)</b>

f_dis_i2 H1.

<b>(* Nesta caso, se a eliminação da disjunção fosse utilizada depois de outras regras, 
não se conseguiria demonstrar *)</b>

f_dis_i1 H2.
Qed.

<b>(* Exemplo de uma demonstração intuicionista com várias negações *)</b>

Theorem example_06 : ~~(~~A -> A).
Proof.
neg_i H.
insert H1 (~~A -> A).
imp_i H2.
insert H3 (~A).
neg_i H4.
neg_e (~~A -> A).

<b>(* Aplicada regra "Backward" em que surgem as duas fórmulas eliminadas pela negação *) </b>

ass H.
imp_i H5.
ass H4.
fls_e.
f_neg_e H2 H3.
f_neg_e H H1.
Qed.

<b>(* Demonstrando a Lei do terceiro excluido *)</b>

Theorem example_07 : A \/ ~A.
Proof.
PBC H0.

<b>(*... assim como a Eliminação da Disjunção, deve-se usar o Absurdo Clássico antes 
de outras regras... *)</b>

<b>(* a idéia é ter o máximo de hipóteses para se trabalhar na demonstração, 
e as regras PBC e dis_e fazem isso... *)</b>

neg_e (A \/ ~ A).
ass H0.

<b>(* Observe que estamos com a mesma fórmula, mas agora temos uma hipótese H0 adicional *)</b>

dis_i2.
neg_i H1.
neg_e (A \/ ~ A).
ass H0.

<b>(* mais uma vez estamos com a mesma fórmula, mas agora temos duas hipóteses H0 e H1 *)</b>

dis_i1.
ass H1.

<b>(* Pronto!!! *)</b>
Qed.

</PRE>

