let find_in good_input input =
  try
    let len = String.length good_input in
    for i = 0 to String.length input - len  do
      if String.sub input i len = good_input then
        raise Exit
    done;
    false
  with Exit -> true

let langs = [
	"fr", [ "Try Logic", "Logique pas à pas";
"English", "Français";
"The subjects of Logic with the notions of Formal Semantics and Theorem Proving, have a fundamental role for the basis of professionals related to fields such as computer science, mathematics, statistics and Philosophy. The Logic is related to the fundations of computer science, such as the calculus is related to the engineering. ",
"Les notions de Sémantique Formelle et de démonstration de théorèmes, associée à la matière de Logique ont un role essenciel pour la formation de professionnel d'informatiques, mathematiques, estatistique et la philosophie, entre autres champs de recherche et atuations.";
"Click here to execute this code", "Cliquer pour exécuter le code";

  "Commands", "Commandes";
  "Effects", "Actions";
  "Enter / Return", "Entrée / Retour";
  "Submit code", "Exécuter le code";
  "Up / Down", "Haut / Bas";
  "Cycle through history", "Historique";
  "Shift + Enter", "Shift + Entrée";
  "Multiline edition", "Édition Multiligne";
  "Move to lesson 1", "Aller à la leçon 1";
  "Move to step 1 of the current lesson", "Aller à l'étape 1 de la leçon courante";
  "See available lessons", "Voir les leçons disponibles";
  "See available steps in the current lesson", "Voir les étapes disponibles dans la leçon courante";
  "Move to the next step", "Passer à l'étape suivante";
  "Move to the previous step", "Revenir à l'étape précédente";

  "You moved to lesson", "Vous êtes passé à la leçon";
  "step", "étape";
  "Congratulations", "Bravo";
  "You moved to the next lesson", "Vous êtes passé à la leçon suivante";
  "You moved to the next step", "Vous êtes passé à l'étape suivante";
  "All steps in lesson", "Toutes les étapes de la leçon";
  "All lessons", "Toutes les leçons";
  "Send", "Exécuter";
  "Clear", "Effacer";
  "Reset", "Ré-init";
  "Save", "Télécharger";
  "Lesson", "Leçon";
  "Step", "Étape";
 ];
	"pt_br", [ "Try Logic", "Lógica Passo a Passo";
"English", "Português";
"The subjects of Logic with the notions of Formal Semantics and Theorem Proving, have a fundamental role for the basis of professionals related to fields such as computer science, mathematics, statistics and Philosophy. The Logic is related to the fundations of computer science, such as the calculus is related to the engineering. ",
"Os conteúdos de Lógica, associados às noções de Semântica Formal e à demonstração de teoremas, são de fundamental relevância para a formação de professionais relacionados às áreas como a computação, matemática, estatística e filosofia. Assim como o Cálculo está para Engenharia, a Lógica está para as bases da Computação.";
"Click here to execute this code", "Clique aqui para executar este código";

  "Commands", "Comandos";
  "Effects", "Ações";
  "Enter / Return", "Enter / Return";
  "Submit code", "Executar o código";
  "Up / Down", "Subir / Descer";
  "Cycle through history", "Histórico";
  "Shift + Enter", "Shift + Enter";
  "Multiline edition", "Edição multi-linhas";
  "Move to lesson 1", "Ir à 1º Lição";
  "Move to step 1 of the current lesson", "Ir ao 1º passo da lição atual";
  "See available lessons", "Acessar lições disponíveis";
  "See available steps in the current lesson", "Acessar passos disponíveis da lição atual";
  "Move to the next step", "Ir ao próximo passo";
  "Move to the previous step", "Voltar ao passo anterior";

  "You moved to lesson", "Você passou para a lição";
  "step", "passo";
  "Congratulations", "Parabéns";
  "You moved to the next lesson", "Você passou para a lição seguinte";
  "You moved to the next step", "Você passou para o passo seguinte";
  "All steps in lesson", "Todos passos da lição";
  "All lessons", "Todas lições";
  "Send", "Executar";
  "Clear", "Limpar";
  "Reset", "Resetar";
  "Save", "Salvar";
  "Lesson", "Lição";
  "Step", "Passo";
 ];
	"tr", [ "English", "Turkçe";

(* The rest needs to be done... *)
"Try Logic", "Try Logic";
"The subjects of Logic with the notions of Formal Semantics and Theorem Proving, have a fundamental role for the basis of professionals related to fields such as computer science, mathematics, statistics and Philosophy. The Logic is related to the fundations of computer science, such as the calculus is related to the engineering.",
"The subjects of Logic with the notions of Formal Semantics and Theorem Proving, have a fundamental role for the basis of professionals related to fields such as computer science, mathematics, statistics and Philosophy. The Logic is related to the fundations of computer science, such as the calculus is related to the engineering.";
"Click here to execute this code",
"Click here to execute this code";
 ];
]
let lessons = [
	(1, "Sistema Dedutivo Np", "<h3>Sistema Dedutivo Np</h3>\n", [
		("fr", ("Syst\195\168me de Deduction N<sub>p</sub> avec le Coq", "<h3>Syst\195\168me de Deduction N<sub>p</sub> avec le Coq</h3>\n"));
	], [
		(1, "Sistema dedutivo N<sub>p</sub> no Coq", "<h3>Sistema dedutivo N<sub>p</sub> no Coq</h3>\n\n<p>Nesta li\195\167\195\163o vamos apresentar um sistema dedutivo para a l\195\179gica proposicional: o sistema de dedu\195\167\195\163o natural <i>N<sub>p</sub></i>.</p><br/>\n\n<p>Um sistema dedutivo \195\169 um procedimento para se <i>demonstrar</i> que uma formula \195\169 consequ\195\170ncia de um conjunto de premissas. </p><br/>\n\n<p>Nossa apresenta\195\167\195\163o do sistema <i>N<sub>p</sub></i> ser\195\161 realizada de forma computacional usando o assistente de demonstra\195\167\195\163o chamado <a href=\"http://coq.inria.fr/\" title=\"O Coq permite a especifica\195\167\195\163o e a verifica\195\167\195\163o de programas que satisfazem essa especifica\195\167\195\163o, tamb\195\169m possibilita realizar demonstra\195\167\195\181es em diversos sistemas l\195\179gicos (intuicionistas, temporais, modais, etc). Tem uma linguagem funcional de especifica\195\167\195\163o (Gallina), baseada num \206\187-calculus tipificado polim\195\179rfico com tipos dependentes e no\195\167\195\163o primitiva de tipos indutivos.\">Coq</a>.</p><br/>\n\n<p><i>(Detalhes? leia o Livro <a href=\"http://www.dimap.ufrn.br/%7Ejmarcos/courses/LC/Ementa.htm\">DGM</a>, Cap. 1, p\195\161gs. 1-5 e 15-46. )</i></p><br/>\n\n<p><i>(Materiais e Exerc\195\173cios <a href=\"http://sites.google.com/site/sequiturquodlibet/courses/laac/dn-lcp\">aqui</a>.)</i></p><br/>\n\nConfira tamb\195\169m os verbetes wikip\195\169dicos:<br/>\n- <a href=\"http://pt.wikipedia.org/wiki/L%C3%B3gica_proposicional\">L\195\179gica proposicional</a><br/>\n- <a href=\"http://pt.wikipedia.org/wiki/C%C3%A1lculo_proposicional\">C\195\161culo Proprosicional</a><br/>\n- <a href=\"http://pt.wikipedia.org/wiki/Dedu%C3%A7%C3%A3o_natural\">Dedu\195\167\195\163o Natural</a>(PT)<br/>\n- <a href=\"http://en.wikipedia.org/wiki/Natural_deduction\">Natural Deduction</a>(EN)<br/>\n- <a href=\"http://pt.wikipedia.org/wiki/Validade\">V\195\161lidade L\195\179gica</a><br/>\n- <a href=\"http://pt.wikipedia.org/wiki/Axioma\">Axioma</a><br/>\n- <a href=\"http://pt.wikipedia.org/wiki/Regra_de_infer%C3%AAncia\">Regra de Infer\195\170ncia</a><br/>\n- <a href=\"http://pt.wikipedia.org/wiki/Lista_de_regras_de_infer%C3%AAncia\">Lista de Regras de Infer\195\170ncia</a>\n\n<br/>\n\n\n\n", [
			("fr", ("Syst\195\168me de Deduction N<sub>p</sub> avec le Coq", "<h3>Syst\195\168me de Deduction N<sub>p</sub> avec le Coq</h3>\n\n"));
		], (
# 0 "../logic-lessons/lesson1/step1/step.ml"
fun input output ->
  find_in  "example_00" output

		));
		(2, "Sistema dedutivo N<sub>p</sub> no Coq", "<h3>Sistema dedutivo N<sub>p</sub> no Coq</h3>\n\n<b>Dedu\195\167\195\163o Natural serve para:</b> <br/> \n\n<p>\nA dedu\195\167\195\163o natural \195\169 um formalismo dedutivo para a apresenta\195\167\195\163o e a verifica\195\167\195\163o de argumentos, e o sistema Np \195\169 um sistema de dedu\195\167\195\163o natural adequado para descrever argumentos aceitos pela l\195\179gica cl\195\161ssica proposicional.  Este sistema capitaliza sobre a representa\195\167\195\163o sint\195\161tica das senten\195\167as da linguagem cl\195\161ssica e n\195\163o faz refer\195\170ncia \195\160s poss\195\173veis interpreta\195\167\195\181es destas senten\195\167as como valores booleanos.</p><br/>\n\n\n<p>Uma demonstra\195\167\195\163o em Dedu\195\167\195\163o Natural \195\169 um estrutura de dados chamada de <i>\195\161rvore de deriva\195\167\195\163o</i>. Demonstrar que \"\206\147 \226\138\162 \206\177\", significa garantir que <i>existe pelo menos uma</i> \195\161rvore etiquetada constru\195\173da com sucessivas regras de infer\195\170ncia, nas quais as <i>folhas abertas</i> s\195\163o as premissas gama (\206\147) e a <i>raiz</i> \195\169 a conclus\195\163o alfa (\206\177). Por exemplo:</p><br/>\n\n<center><img  src=\"images/logic/ex1.png\" alt=\"Example of Deduction 1\" width=\"320\"  /></center><br/>\n\n<b>Dedu\195\167\195\163o Natural <i>N\195\131O</i> serve para:</b> <br/>\n<p>Apresentar um contra-exemplo de um sequente; Extrair senten\195\167as inv\195\161lidas a partir de Premissas; Verificar se premissas n\195\163o acarretam em uma conclus\195\163o; Em suma, com Dedu\195\167\195\163o Natural <i>n\195\163o podemos refutar argumentos</i>.</p>\n\n\n\n\n", [
		], (
# 0 "../logic-lessons/lesson1/step2/step.ml"
fun input output ->
  find_in  "example_00" output

		));
		(3, "Template para a Demonstra\195\167\195\163o no Coq", "<h3>Template para a Demonstra\195\167\195\163o no Coq</h3>\n\n<p>Vamos aplicar o Coq para produzir uma \195\161rvore de deriva\195\167\195\163o demonstrando que: \"\206\177, \206\177 \226\134\146 \206\178, \206\178 \226\134\146 (\206\179 \226\136\167 \206\180) \226\138\162 \206\179\".</p><br/>\n\n<p>Primeiro, carregamos a teoria com as regras de infer\195\170ncia:</p>\n\n<p><code>Require Import ProofWeb.</code></p><br/>\n\n<p>Em seguida, declaramos as <b>vari\195\161veis</b> que utilizaremos na demonstra\195\167\195\163o: </p>\n\n<p><code>Variables A B C D: Prop.</code></p>\n\n<p>Observe que <b>A B C</b> s\195\163o do tipo <b>Prop</b>, ou seja, s\195\163o <i>vari\195\161veis proposicionais</i>.</p>\n\n<p>Na sequ\195\170ncia, declaramos as marcas <b>P1</b>, <b>P2</b> e <b>P3</b> para as Premissas:</p>\n<pre><code>Hypothesis P1 : A.\nHypothesis P2: (A -> B).\nHypothesis P3: (B -> (C /\\ D)).</code></pre>\n\n<p>E declaramos o que desejamos demonstrar :</p>\n\n<code>Theorem example_00 : C.</code><br/>\n\n<p>Para iniciar a demonstra\195\167\195\163o \195\169 preciso o comando:</p>\n\n<code>Proof.</code><br/>\n\n<p>Agora, sim podemos inserir as regras de infer\195\170ncia adequadas at\195\169 demonstrarmos o desejado.</p><br/>\n\n<i>Vemos nos pr\195\179ximos passos.</i>\n\nConfira tamb\195\169m: <br/>\n\n- <a href=\"http://lolita.dimap.ufrn.br/proofweb/\">ProofWeb - Interface de demonstra\195\167\195\163o do Coq</a><br/>\n- <a href=\"http://lolita.dimap.ufrn.br/proofweb/tutorial-video.htm\">Video tutorial para o ProofWeb</a><br/>\n- <a href=\"http://lolita.dimap.ufrn.br/proofweb/man.pdf\">Manual do Proofweb</a><br/>\n", [
		], (
# 0 "../logic-lessons/lesson1/step3/step.ml"
fun input output ->
  find_in  "example_00" output

		));
		(4, "Exemplo de Demonstra\195\167\195\163o no Coq", "<h3>Exemplo de Demonstra\195\167\195\163o no Coq</h3>\n\n<p>Continuando a demonstra\195\167\195\163o de \"\206\177, \206\177 \226\134\146 \206\178, \206\178 \226\134\146 (\206\179 \226\136\167 \206\180) \226\138\162 \206\179\" </p><br/>\n\n<p>Observamos que a conclus\195\163o \206\180 est\195\161 tamb\195\169m na premissa \"\206\178 \226\134\146 (\206\179 \226\136\167 \206\180)\".  Portanto, aplicamos a regra de elimina\195\167\195\163o da conjun\195\167\195\163o, passando como par\195\162metro o lado direito da conjun\195\167\195\163o: </p> \n<code>\ncon_e1 D.\n</code><br/> \n\n<p>Esta conjun\195\167\195\163o (\206\179 \226\136\167 \206\180) \195\169 obtida atrav\195\169s da elimina\195\167\195\163o da implica\195\167\195\163o (\226\134\146 E), passando como par\195\162metro o antecedente da implica\195\167\195\163o \206\178:</p>\n<code>\nimp_e B.\n</code><br/> \n\n<p>E esta \195\169 exatamente a premissa P3 (\206\178 \226\134\146 (\206\179 \226\136\167 \206\180)), por isso aplicamos o comando:</p>\n<code>\nexact P3.\n</code><br/> \n\n<p>Agora, nos resta verificar de onde obtemos a f\195\179rmula \206\178. Analisando a premissa P2 (\206\177 \226\134\146 \206\178) temos que \206\178 se verificarmos \206\177, mas justamente \206\177 \195\169 a premissa P1, portanto, podemos aplicar a elimina\195\167\195\163o da implica\195\167\195\163o (\226\134\146 E), dessa vez passando como par\195\162metro \206\177:</p>\n<code>\nimp_e A.\n</code>\n\n<p>E <i>voil\195\161</i>, \195\169 s\195\179 dizer que estas s\195\163o exatamente as premissas P2 (\206\177 \226\134\146 \206\178) e P1 (\206\177).</p>\n<pre><code>exact P2.\nexact P1.</code></pre>\n\nS\195\179 completamos a demonstra\195\167\195\163o com o comando, <i>como quer\195\173amos demonstrar</i>:<br/>\n<code>\nQed.\n</code><br/><br/>\n\n<p>Usamos duas aplica\195\167\195\181es de <i>Elimina\195\167\195\163o da Implica\195\167\195\163o</i> (\226\134\146 I) e uma aplica\195\167\195\163o de Elimina\195\167\195\163o da Conjun\195\167\195\163o a direita (\226\136\167 E<sub>d</sub>): </p><br/>\n<center><img  src=\"images/logic/r-ex0.png\" alt=\"Rules of Implication\" width=\"350\"  /></center>\n\n", [
		], (
# 0 "../logic-lessons/lesson1/step4/step.ml"
fun input output ->
  find_in  "example_00" output

		));
	]);
	(2, "Regras da Conjun\195\167\195\163o", "<h3>Regras da Conjun\195\167\195\163o</h3>\n", [
	], [
		(1, "Regras da Conjun\195\167\195\163o I", "<h3>Regras da Conjun\195\167\195\163o I</h3>\n\n<p>Agora que vimos um primeiro exemplo, vamos nos concentrar nas regras de cada conectivo.</p> <br/>\n\n<p><i>- Introdu\195\167\195\163o da conjun\195\167\195\163o</i> (\226\136\167 I): Representa o racioc\195\173nio em que se as asser\195\167\195\181es \206\177 e \206\178 verificam-se em separado, ent\195\163o verifica-se a sua conjun\195\167\195\163o. No Coq, o comando utilizado \195\169 <b>con_i</b>.</p><br/>\n\n<p><i>- Elimina\195\167\195\163o da conjun\195\167\195\163o \195\160 direita</i> (\226\136\167 E<sub>1</sub>): Significa que se a asser\195\167\195\163o \206\177 \226\136\167 \206\178 se verifica, ent\195\163o verifica-se \206\177 em particular. \nNo Coq, o comando utilizado \195\169 <b>con_e1 \206\178</b>, passando como par\195\162metro a f\195\179rmula proposicional \195\160 <i>direita</i> da conjun\195\167\195\163o eliminada.</p><br/>\n \n<p><i>- Elimina\195\167\195\163o da conjun\195\167\195\163o \195\160 esquerda</i> (\226\136\167 E<sub>2</sub>): De forma an\195\161loga, significa que se a asser\195\167\195\163o \206\177 \226\136\167 \206\178 se verifica, ent\195\163o verifica-se \206\178 em particular. \nNo Coq, o comando utilizado \195\169 <b>con_e2 \206\177</b>, passando como par\195\162metro a f\195\179rmula proposicional \195\160 <i>esquerda</i> da conjun\195\167\195\163o eliminada.</p><br/>\n\n\n<p>Vamos demonstrar a comutatividade da conjun\195\167\195\163o: \"(\206\177 \226\136\167 \206\178) \226\138\162 (\206\178 \226\136\167 \206\177)\". </p>\n\n<pre><code>Require Import ProofWeb.\nVariables A B : Prop.\nHypothesis P1 : (A /\\ B).\nTheorem example_02 : (B /\\ A).\nProof.</code></pre>\n\n\n<p>Como nossa conclus\195\163o possui a conjun\195\167\195\163o  como conectivo principal, podemos aplicar a regra de introdu\195\167\195\163o da conjun\195\167\195\163o:</p>\n<code>\ncon_i.\n</code><br/>\n\n\n<p>Agora, devemos indicar de onde vieram <b>B</b> e <b>A</b>, ou seja, atrav\195\169s das regras de (\226\136\167 E<sub>2</sub>) :</p>\n<code>\ncon_e2 A.\n</code><br/>\n\n\nSeguida da identifica\195\167\195\163o exata de P1:<br/>\n<code>\nexact P1.\n</code><br/>\n\n<p><b><i>Para ter certeza que voc\195\170 entendeu, complete o restante da demonstra\195\167\195\163o, antes de passar para o pr\195\179ximo passo!</i></b></p><br/>\n<code>\n? ? ?\n</code>\n<br/><br/>\n\n<center><img  src=\"images/logic/r-conj.png\" alt=\"Rules of Conjuction\" width=\"550\"  /></center>\n", [
		], (
# 0 "../logic-lessons/lesson2/step1/step.ml"
fun input output ->
  find_in  "example_02 is defined." output

		));
		(2, "Regras da Conjun\195\167\195\163o - Autoavalia\195\167\195\163o", "<h3>Regras da Conjun\195\167\195\163o - Autoavalia\195\167\195\163o</h3>\n\n<p>Agora \195\169 sua vez, tente demonstrar o seguinte argumento: \"\206\177 \226\136\167 (\206\178 \226\136\167 \206\179) \226\138\162 (\206\177 \226\136\167 \206\178) \226\136\167 \206\179\". </p> <br/>\n\n<pre><code>Require Import ProofWeb.\nVariables A B C : Prop.\nHypothesis P1 : A /\\ (B /\\ C).\nTheorem example_03 : (A /\\ B) /\\ C.\nProof.</code></pre>\n\n<p><b><i>M\195\163os \195\160 obra!</i></b></p><br/>\n\n<code>\n? ? ?\n</code>\n<br/><br/>\n\n<center><img  src=\"images/logic/r-conj.png\" alt=\"Rules of Conjuction\" width=\"550\"  /></center>\n", [
		], (
# 0 "../logic-lessons/lesson2/step2/step.ml"
fun input output ->
  find_in  "example_03 is defined" output

		));
	]);
	(3, "Regras da Implica\195\167\195\163o", "<h3>Regras da Implica\195\167\195\163o</h3>\n", [
	], [
		(1, "Regras da Implica\195\167\195\163o I", "<h3>Regras da Implica\195\167\195\163o I</h3>\n\n\n<p>Vamos demonstrar que \"\206\177 \226\134\146 \206\178, \206\178 \226\134\146 \206\179 \226\138\162 \206\177 \226\134\146 \206\179\".</p> \n<br/>\n\n<pre><code>Require Import ProofWeb.\nVariables A B C : Prop.\nHypothesis P1 : A -> B.\nHypothesis P2 : B -> C.\nTheorem example_04 : A -> C.\nProof.</code></pre>\n\n<p>Come\195\167amos pela introdu\195\167\195\163o da implica\195\167\195\163o (\226\134\146 I), passando a marca <b>h1</b> para representar a hip\195\179tese <b>A</b>: </p><br/>\n<code>\nimp_i h1.\n</code><br/>\n\nAgora, podemos obter <b>C</b>, atrav\195\169s de <b>P2</b> eliminando a implica\195\167\195\163o, passando o antecedente <b>B</b> como par\195\162metro, por fim, identificamos a premissa <b>P2</b>:<br/>\n<pre><code>imp_e B.\nexact P2.\n</code></pre>\n\n<p>Dessa vez, de forma an\195\161loga, eliminamos a implica\195\167\195\163o em <b>P1</b> com <b>A</b>.</p>\n<pre><code>imp_e A.\nexact P1.\n</code></pre>\n\n<p>Assim, completamos a demonstra\195\167\195\163o.</p>\n<code>\nQed.\n</code>\n<br/><br/>\n\n\n<p><i>- Introdu\195\167\195\163o da implica\195\167\195\163o</i> (\226\134\146 I): Permite obter uma deriva\195\167\195\163o \206\177 \226\134\146 \206\178, a partir de uma deriva\195\167\195\163o de \206\178, e um conjunto de hip\195\179teses que <i>pode</i> conter \206\177. No Coq, o comando utilizado \195\169 <b>imp_i h</b> , passando como par\195\162metro uma marca <i>h</i> para a hip\195\179tese \206\177 que eventualmente pode ser descartada. Esta marca <i>h</i> na regra (\226\134\146 I) deve pelo menos ser:<br/>\n<b>(i)</b> uma marca de uma ou mais hip\195\179teses abertas da f\195\179rmula \206\177 -- representando o antecedente da implica\195\167\195\163o introduzida, ou <br/>\n<b>(ii)</b> uma marca <i>nova</i> que n\195\163o ocorre na deriva\195\167\195\163o.</p><br/>\n\n<p><i>- Elimina\195\167\195\163o da implica\195\167\195\163o</i> (\226\134\146 E): Permite concluir \206\178, a partir de deriva\195\167\195\181es de \"\206\177 \226\134\146 \206\178\" e \"\206\178\", tamb\195\169m conhecido como <i>modus pones</i>. No Coq, o comando utilizado \195\169 <b>imp_e \206\177</b>, passando como par\195\162metro o antecedente \206\177 da implica\195\167\195\163o a ser eliminada.</p></p>\n\n<br/><br/>\n<center><img  src=\"images/logic/r-imp.png\" alt=\"Rules of Implication\" width=\"550\"  /></center><br/><br/>\n\n", [
		], (
# 0 "../logic-lessons/lesson3/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
		(2, "Regras da Implica\195\167\195\163o II", "<h3>Regras da Implica\195\167\195\163o II</h3>\n\n<p>Vamos entender melhor o significado do <i>descarte</i> de hip\195\179teses da regra <b>(\226\134\146 I)</b>. Primeiro, vamos entender que o descarte de hip\195\179tese \195\169 um direito, i.e. com a regra <b>(\226\134\146 I)</b> <i>ganhamos</i> hip\195\179teses que podem eventualmente ser utilizadas, ou seja, pode ser que n\195\163o precisemos. Informalmente, podemos supor diversas hip\195\179tese, mas n\195\163o precisamos usar todas hip\195\179teses para se chegar a determinada conclus\195\163o.</p><br/>\n\n<p>Exemplificando com o teorema: \"\226\138\162 \206\177 \226\134\146 (\206\178 \226\134\146 \206\177)\"</p>\n \n<pre><code>Require Import ProofWeb.\nVariables A B : Prop.\nTheorem example_05 :  A -> (B -> A).\nProof.</code></pre>\n\n<p> Pelas li\195\167\195\163o anteriores, vimos que precisamos analisar os conectivos de todas f\195\179rmulas do que precisamos demonstrar. No caso, como temos uma implica\195\167\195\163o, tentar usar a regra <b>(\226\134\146 I)</b>, com a marca h1 (poderia ser qualquer marca que fosse nova). </p> \n<code>\nimp_i h1.\n</code><br/>\n\n<p> Agora ganhamos uma nova hip\195\179tese <b>A</b> com a marca <b>h1</b>. Mas ainda n\195\163o podemos fazer muita coisa. Vamos tentar aplicar a regra <b>(\226\134\146 I)</b>:</p> \n<code>\nimp_i h1.\n</code><br/>\n\n<p><i><b>Ops! H\195\161 um erro, voc\195\170 poderia corrigi-lo? S\195\179 escrever ao lado o comando correto.</b></i> Lembre-se das restri\195\167\195\181es das marcas.</p><br/>\n\n<p>Bom, agora s\195\179 dizer que esta f\195\179rmula \195\169 extamente a mesma da marca <b>h1</b>:</p>\n<code>\nexact h1.\n</code><br/>\n\n<p>Note que n\195\163o usamos a hip\195\179tese <b>B</b> e a marca que voc\195\170 inseriu. Este \195\169 um exemplo de que <i>n\195\163o somos obrigados</i> a usar todas as hip\195\179teses descartadas pela regra (\226\134\146 I), nem todas premissas para completar uma deriva\195\167\195\163o.</p>\n\n<p>Pronto, completamos a demonstra\195\167\195\163o:</p><br/>\n<code>\nQed.\n</code>\n<br/>\n<br/>\n<center><img  src=\"images/logic/r-imp.png\" alt=\"Rules of Implication\" width=\"550\"  /></center><br/><br/>\n", [
		], (
# 0 "../logic-lessons/lesson3/step2/step.ml"
fun input output ->
  find_in  "example_05 is defined" output

		));
		(3, "Regras da Implica\195\167\195\163o - Autoavalia\195\167\195\163o", "<h3>Regras da Implica\195\167\195\163o - Autoavalia\195\167\195\163o</h3>\n\n<p>Vimos que o descarte de hip\195\179tese \195\169 um direito em regras como a <b>(\226\134\146 I)</b>. Veremos tamb\195\169m que podemos usar as hip\195\179teses quantas vezes for preciso.</p><br/>\n\n<p>Confira demonstrando que : \"\206\177 \226\134\146 (\206\177 \226\134\146 \206\178) \226\138\162 \206\177 \226\134\146 \206\178\"</p>\n \n<pre><code>Require Import ProofWeb.\nVariables A B : Prop.\nHypothesis P1 : A -> (A -> B).\nTheorem example_06 :  A -> B.\nProof.</code></pre>\n\n<p><b><i>M\195\163os \195\160 obra!</i></b></p><br/>\n\n<code>\n? ? ?\n</code>\n<br/><br/>\n\n<p><i><b>Dica</b>: S\195\179 precisaremos usar duas regras (\226\134\146 I) e uma (\226\134\146 E), cuidado com as restri\195\167\195\181es das marcas e as diferen\195\167as entre as duas regras.</p>\n\n<center><img  src=\"images/logic/r-imp.png\" alt=\"Rules of Implication\" width=\"550\"  /></center><br/><br/>\n", [
		], (
# 0 "../logic-lessons/lesson3/step3/step.ml"
fun input output ->
  find_in  "example_06 is defined" output

		));
	]);
	(4, "Regras da Nega\195\167\195\163o", "<h3>Regras da Nega\195\167\195\163o</h3>\n", [
	], [
		(1, "Regras da Nega\195\167\195\163o I", "<h3>Regras da Nega\195\167\195\163o I</h3>\n\n<p>Na L\195\179gica Proposicional, podemos -- em parte -- entender a <i>nega\195\167\195\163o</i> (\194\172) atrav\195\169s da <i>implica\195\167\195\163o</i>, a constante de absurdo (\226\138\165) e mais algumas regras que vamos aprender.</p><br/>\n\n<p>Por isso, as regras da nega\195\167\195\163o (\194\172 I) e (\194\172 E) s\195\163o semelhantes \195\160s regras (\226\134\146 I) e (\226\134\146 E)</p>\n \n<p>Vamos demonstrar o seguinte teorema: \" \226\138\162 \194\172 \194\172( \194\172 \194\172 \206\177 \226\134\146 \206\177)\". </p>\n\n<pre><code>Require Import ProofWeb.\nVariables A : Prop.\nTheorem example_07 : ~~(~~A -> A).\nProof.</code></pre>\n\n<p>Como nosso conectivo mais externo \195\169 uma nega\195\167\195\163o, nossa estrat\195\169gia \195\169 usar a regra (\194\172 I), obtendo uma nova hip\195\179tese h1:</p> \n<code>\nneg_i h1.\n</code><br/>\n\n<p>Agora temos que decidir de qual regra obtivemos o \226\138\165, a princ\195\173pio poder\195\173amos obter de qualquer aplica\195\167\195\163o da (\194\172 E) com diferentes par\195\162metros. Por praticidade, vamos dizer o \226\138\165 foi obtido por  (\194\172 E) em  ~(~~A -> A) e (~~A -> A), justamente para podermos identific\195\161-lo com a hip\195\179tese h1:</p> \n<pre><code>neg_e (~~A -> A).\nexact h1.</code></pre>\n\n<p>Em seguida, como temos uma implica\195\167\195\163o, usamos (\226\134\146 I) e ganhamos uma nova hip\195\179tese h1:</p> \n<code>\nimp_i h2.\n</code><br/>\n\n<p>Para de imediato usarmos a nova hip\195\179tese h1, indicamos que \226\138\165 foi obtido por (\194\172 E) em  (~~A) e (~A):</p>\n<pre><code>neg_e (~A).\nexact h2.</code></pre>\n\n<p>Nesse momento usamos a (\194\172 I) e obtemos uma nova hip\195\179tese (A) com a marca h3.</p>\n<code>\nneg_i h3.\n</code><br/>\n\n<p>Bom, a demonstra\195\167\195\163o est\195\161 quase no fim, <b><i>qual a sua sugest\195\163o para o par\195\162metro da (\194\172 E) ?</i></b></p>\n<code>\nneg_e ??\n</code><br/>\n\n<p><i><b>Dica</b></i>: Explore as op\195\167\195\181es poss\195\173veis (A), (~A) e (~~A -> A)</p><br/>\n\n<p><i>- Introdu\195\167\195\163o da nega\195\167\195\163o </i> (\194\172 I): Permite obter uma deriva\195\167\195\163o \194\172 \206\177, a partir de uma deriva\195\167\195\163o de \226\138\165, e um conjunto de hip\195\179teses que <i>pode</i> conter \206\177. No Coq, o comando utilizado \195\169 <b>neg_i h</b> , passando como par\195\162metro uma marca <i>h</i> para a hip\195\179tese \206\177 que eventualmente pode ser descartada. Esta marca <i>h</i> na regra (\194\172 I) deve pelo menos ser:<br/>\n<b>(i)</b> uma marca de uma ou mais hip\195\179teses abertas da f\195\179rmula \206\177 -- representando o antecedente da implica\195\167\195\163o introduzida, ou <br/>\n<b>(ii)</b> uma marca <i>nova</i> que n\195\163o ocorre na deriva\195\167\195\163o.</p><br/>\n\n<p><i>- Elimina\195\167\195\163o da implica\195\167\195\163o</i> (\194\172 E): Permite concluir \226\138\165, a partir de deriva\195\167\195\181es de \"\194\172 \206\177\" e \"\206\177\". No Coq, o comando utilizado \195\169 <b>neg_e \206\177</b>, passando como par\195\162metro a f\195\179rmula contradit\195\179ria \206\177.</p><br/>\n\n\n<center><img  src=\"images/logic/r-neg.png\" alt=\"Rules of Negation\" width=\"550\"  /></center><br/><br/>\n", [
		], (
# 0 "../logic-lessons/lesson4/step1/step.ml"
fun input output ->
  find_in  "example_08 is defined" output

		));
		(2, "Regras da Nega\195\167\195\163o - Autoavalia\195\167\195\163o I", "<h3>Regras da Nega\195\167\195\163o - Autoavalia\195\167\195\163o I</h3>\n\n<p>Vimos que as regras da nega\195\167\195\163o (\194\172 I) e (\194\172 E) s\195\163o semelhantes \195\160s regras (\226\134\146 I) e (\226\134\146 E).</p><br/>\n\n<p>Teste se voc\195\170 compreendeu realmente demonstrando que : \" \226\138\162 (\206\177 \226\134\146 \194\172\206\177) \226\134\146 \194\172\206\177\"</p>\n \n<pre><code>Require Import ProofWeb.\nVariables A : Prop.\nTheorem example_08 :  (A -> ~A) -> ~A.\nProof.</code></pre>\n\nM\195\163os \195\160 obra! <br/>\n\n<code>\n? ? ?\n</code>\n<br/><br/>\n\n\n<p><i><b>Dica:</b> Na primeira regra (\194\172 E) que voc\195\170 usar, explore as op\195\167\195\181es: <b>(A -> ~A)</b>, <b>(~A)</b> e <b>(A)</b></i>.</p>\n\n<center><img  src=\"images/logic/r-neg.png\" alt=\"Rules of Negation\" width=\"550\"  /></center><br/><br/>\n", [
		], (
# 0 "../logic-lessons/lesson4/step2/step.ml"
fun input output ->
  find_in  "example_07 is defined" output

		));
		(3, "Regras da Nega\195\167\195\163o II", "<h3>Regras da Nega\195\167\195\163o II</h3>\n\n<p>Neste passo, vamos aprender mais duas regras para nega\195\167\195\163o que -- juntamente a (\194\172 I) e (\194\172 E) -- completam a caracteriza\195\167\195\163o da nega\195\167\195\163o cl\195\161ssica: <b>\226\138\165<sub>c</sub></b> e <b>\226\138\165<sub>int</sub></b>.</p><br/>\n \n<p><i>- Absurdo intuicionista</i> <b>(\226\138\165<sub>int</sub>)</b>: Permite obter uma deriva\195\167\195\163o de um \206\179 <i>qualquer</i>, a partir de uma deriva\195\167\195\163o de \226\138\165. Intuitivamente, expressa que se verificamos o absurdo, ent\195\163o qualquer f\195\179rmula pode ser verificada, racioc\195\173nio tamb\195\169m chamado de <a href=\"http://pt.wikipedia.org/wiki/Princ%C3%ADpio_de_explos%C3%A3o\">princ\195\173pio da explos\195\163o</a>, <i>ex falso quodlibet</i> ou <i>ex contradictione sequitur quodlibet</i>. No Coq, o comando utilizado \195\169 <b>fls_e</b>.</p>\n\n<p><i>- Absurdo Cl\195\161ssico</i> <b>(\226\138\165<sub>c</sub>)</b>: Permite obter uma deriva\195\167\195\163o de \206\177, a partir de uma deriva\195\167\195\163o de \226\138\165, e um conjunto de hip\195\179teses que <i>pode</i> conter (\194\172 \206\177). No Coq, o comando utilizado \195\169 <b>PCB h</b>, passando como par\195\162metro uma marca <i>h</i> para a hip\195\179tese <b>(\194\172 \206\177)</b> que eventualmente pode ser descartada. Esta marca <i>h</i> na regra <b>(\226\138\165<sub>c</sub>)</b> deve pelo menos ser:</p><br/>\n<b>(i)</b> uma marca de uma ou mais hip\195\179teses abertas da f\195\179rmula <b>(\194\172 \206\177)</b> -- representando o antecedente da implica\195\167\195\163o introduzida, ou <br/>\n<b>(ii)</b> uma marca <i>nova</i> que n\195\163o ocorre na deriva\195\167\195\163o de \226\138\165.<br/>\n\n<p>Note que a regra <b>(\226\138\165<sub>int</sub>)</b> \195\169 um caso particular de <b>(\226\138\165<sub>c</sub>)</b>, s\195\179 que sem hip\195\179teses descartadas.</p>\n\n<p>Vamos demonstrar o seguinte : \" \206\177 \226\134\146 \206\178, \194\172 \206\178 \226\138\162 \194\172 \206\177\". </p>\n\n<pre><code>Require Import ProofWeb.\nVariables A B: Prop.\nHypothesis P1 : (A -> B).\nHypothesis P2 : (~ B).\nTheorem example_09 : ~A.\nProof.</code></pre>\n\n<p>Nossa dica \195\169 sempre buscar usar as regras que descartem hip\195\179tese -- tais como (\226\134\146 I), (\194\172 I) e (\226\138\165<sub>c</sub>) -- e em particular, a regra (\226\138\165<sub>c</sub>) pois por descartar uma f\195\179rmula negada, a regra tem <i>maior for\195\167a dedutiva</i> que a (\194\172 I). Por isso optamos por (\226\138\165<sub>c</sub>) para se demonstrar :</p>\n<code>\nPBC h1.\n</code><br/>\n\n<p>De que aplica\195\167\195\163o de (\194\172 E) ter\195\161 vindo o \226\138\165 ? Algumas op\195\167\195\181es s\195\163o (A -> B), (~A) e (B). Vamos optar por (B) e identific\195\161-lo com a premissa P2: </p>\n<pre><code>neg_e (B).\nexact P2.\n</code></pre>\n\n<p>Em seguida, obtemos a f\195\179rmula B, atrav\195\169s da (\226\134\146 E) na premissa P1: </p>\n<pre><code>imp_e A.\nexact P1.\n</code></pre>\n\n<p>Agora, n\195\163o temos muitas op\195\167\195\181es al\195\169m de aplicar novamente o (\226\138\165<sub>c</sub>):</p>\n<code>\nPBC h2.\n</code><br/>\n\n<p>A op\195\167\195\163o imediata para (\194\172 E) \195\169 (~A), dado que temos as marcas h1 e h2:  </p>\n<pre><code>neg_e (~ A).\nexact h1.\nexact h2.\n</code></pre>\n\n<p>Pronto! Finalizamos a demonstra\195\167\195\163o!</p>\n\n<code>\nQed.\t\n</code>\n\n<p><i>(Confira o Livro <a href=\"http://www.dimap.ufrn.br/%7Ejmarcos/courses/LC/Ementa.htm\">DGM</a>, Cap. 1, p\195\161gs. 32-35. )</i></p>\n\n<center><img  src=\"images/logic/r-neg.png\" alt=\"Rules of Negation\" width=\"550\"  /></center><br/><br/>\n", [
		], (
# 0 "../logic-lessons/lesson4/step3/step.ml"
fun input output ->
  find_in  "example_09 is defined" output

		));
		(4, "Regras da Nega\195\167\195\163o II - Autoavalia\195\167\195\163o", "<h3>Regras da Nega\195\167\195\163o II - Autoavalia\195\167\195\163o</h3>\n\n<p>Exerc\195\173cio: Demonstre a mesma deriva\195\167\195\163o do passo anterior, agora sem usar a regra  <b>(\226\138\165<sub>c</sub>)</b>, apenas o <b>(\226\138\165<sub>int</sub>)</b>. </p>\n\n<pre><code>Require Import ProofWeb.\nVariables A B: Prop.\nHypothesis P1 : (A -> B).\nHypothesis P2 : (~ B).\nTheorem example_10 : ~A.\nProof.</code></pre>\n\n\n<p><b><i>M\195\163os \195\160 obra!</i></b></p><br/>\n\n<code>\n? ? ?\n</code>\n<br/><br/>\n\n\n<p><i><b>Dica</b></i>: Na primeira aplica\195\167\195\163o para (\194\172 E), explore outras op\195\167\195\181es como (~A) e (A -> B).</p>\n\n\n<p><i>(Confira o Livro <a href=\"http://www.dimap.ufrn.br/%7Ejmarcos/courses/LC/Ementa.htm\">DGM</a>, Cap. 1, p\195\161gs. 32-35. )</i></p>\n\n<center><img  src=\"images/logic/r-neg.png\" alt=\"Rules of Negation\" width=\"550\"  /></center><br/><br/>\n", [
		], (
# 0 "../logic-lessons/lesson4/step4/step.ml"
fun input output ->
  find_in  "example_10 is defined" output

		));
	]);
	(5, "Regras da Disjun\195\167\195\163o", "<h3>Regras da Disjun\195\167\195\163o</h3>\n", [
	], [
		(1, "Regras da Disjun\195\167\195\163o I", "<h3>Regras da Disjun\195\167\195\163o I</h3>\n\n<p>Para ilustrar as regras da disjun\195\167\195\163o <b>(\226\136\168 I <sub>1</sub>) e (\226\136\168 I <sub>2</sub>)</b>, vamos demonstrar algo intuitivo como \"\206\177 \226\138\162  (\206\177 \226\136\168 \206\179) \226\136\167 (\206\177 \226\136\168 \206\178)\":</p>\n\n<pre><code>Require Import ProofWeb.\nVariables A B C : Prop.\nHypothesis P1 : (A).\nTheorem example_11 :  (A \\/ B) /\\ (C \\/ A).\nProof.</code></pre>\n\n<p>Note que o conectivo principal \195\169 a conjun\195\167\195\163o, logo aplicamos a regra (\226\136\167 I):</p>\n<code>\ncon_i.\n</code>\n\n<p>Agora, temos que verificar que (\206\179 \226\136\168 \206\177) e (\206\177 \226\136\168 \206\178). No primeiro lado, usamos a regra (\226\136\168 I <sub>1</sub>) e identificarmos nossa premissa P1: </p>\n<pre><code>dis_i1.\nexact P1.</code></pre>\n\n<p>Em seguida, usamos a regra (\226\136\168 I <sub>2</sub>) e novamente identificarmos nossa premissa P1: </p>\n<pre><code>dis_i2.\nexact P1.</code></pre>\n\n<p>Assim usamos a introdu\195\167\195\163o da disjun\195\167\195\163o \195\160 direita <b>(\226\136\168 I <sub>1</sub>) e a introdu\195\167\195\163o da disjun\195\167\195\163o \195\160 esquerda (\226\136\168 I <sub>2</sub>). </p>\n<code>Qed.\n</code>\n\n\n<p><i>- Introdu\195\167\195\163o da disjun\195\167\195\163o \195\160 direita</i> (\226\136\168 I<sub>1</sub>): Significa que se a asser\195\167\195\163o \206\177 se verifica, ent\195\163o verifica-se \"(\206\177 \226\136\168 \206\178)\". \nNo Coq, o comando utilizado \195\169 <b>dis_i1</b>.</p><br/>\n \n<p><i>- Introdu\195\167\195\163o da disjun\195\167\195\163o \195\160 esquerda</i> (\226\136\168 I<sub>2</sub>): De forma an\195\161loga, significa que se a asser\195\167\195\163o \206\178 se verifica, ent\195\163o verifica-se \"(\206\177 \226\136\168 \206\178)\". \nNo Coq, o comando utilizado \195\169 <b>dis_i2</b>.</p><br/>\n\n<p><i>(Confira o Livro <a href=\"http://www.dimap.ufrn.br/%7Ejmarcos/courses/LC/Ementa.htm\">DGM</a>, Cap. 1, p\195\161gs. 30-31. )</i></p><br/>\n\n<center><img  src=\"images/logic/r-disj.png\" alt=\"Rules of Disjunction\" width=\"550\"  /></center><br/><br/>\n", [
		], (
# 0 "../logic-lessons/lesson5/step1/step.ml"
fun input output ->
  find_in  "example_00" output

		));
		(2, "Regras da Disjun\195\167\195\163o II", "<h3>Regras da Disjun\195\167\195\163o II</h3>\n\n<p>Neste passo vamos explorar mais as regras (\226\136\168 I<sub>1</sub>) e (\226\136\168 I<sub>2</sub>), junto com as regras da nega\195\167\195\163o (\194\172 I),(\194\172 E) e (\226\138\165<sub>c</sub>), ao demonstrar que \"\226\138\162 (\206\177 \226\136\168 \194\172\206\177)\"</p>\n\n<pre><code>Require Import ProofWeb.\nVariables A : Prop.\nTheorem example_12 :  (A \\/ ~A).\nProof.</code></pre>\n\n<p>Lembre-se de usar o Absurdo cl\195\161ssico (\226\138\165<sub>c</sub>) antes de outras regras, a ideia \195\169 ter o m\195\161ximo de hip\195\179teses para se trabalhar na demonstra\195\167\195\163o:</p><br/>\n<code>\nPBC h0.\n</code>\n\n<p>Agora aplicamos (\194\172 E), observe que estamos na mesma f\195\179rmula, mas agora temos a hip\195\179tese h0 adicional:</p>\n<pre><code>neg_e (A \\/ ~ A).\nass h0.</code></pre>\n\n<p> Mais uma vez estamos com a mesma f\195\179rmula, por\195\169m com duas hip\195\179teses h0 e h1 adicionais: </p>\n<pre><code>dis_i2.\nneg_i h1.\nneg_e (A \\/ ~ A).\nass h0.</code></pre>\n\n<p> Finalizamos a demonstra\195\167\195\163o com (\226\136\168 I<sub>1</sub>) </p>\n<pre><code>dis_i1.\nass h1.</code></pre>\n\n\n<p><i><b>Experimente:</b></i> demonstrar aplicando primeiro a regra (\226\136\168 I<sub>1</sub>), ao inv\195\169s da (\226\136\168 I<sub>2</sub>). </p>\n\n\n<p><i>(Confira o Livro <a href=\"http://www.dimap.ufrn.br/%7Ejmarcos/courses/LC/Ementa.htm\">DGM</a>, Cap. 1, p\195\161gs. 30-31. )</i></p>\n\n<center><img  src=\"images/logic/r-dis.png\" alt=\"Rules of Disjunction\" width=\"550\"  /></center><br/><br/>\n", [
		], (
# 0 "../logic-lessons/lesson5/step2/step.ml"
fun input output ->
  find_in  "example_00" output

		));
		(3, "Regras da Disjun\195\167\195\163o III", "<h3>Regras da Disjun\195\167\195\163o III</h3>\n\n<p>Neste passo vamos explorar a regra <b>(\226\136\168 E)</b>, demonstrando que \"\206\177 \226\136\168 \206\178, \206\177 \226\134\146 \206\179, \206\178 \226\134\146 \206\180 \226\138\162 (\206\179 \226\136\168 \206\180)\":</p>\n<pre><code>Require Import ProofWeb.\nVariables A B C D : Prop.\nHypothesis P1 : A \\/ B.\nHypothesis P2 : A -> C.\nHypothesis P3 : B -> D.\nTheorem example_13 :  (C \\/ D).\nProof.</code></pre>\n\n<p>Bom, a regra <b>(\226\136\168 E)</b>, significa que se verificamos uma disjun\195\167\195\163o como \"\206\177 \226\136\168 \206\178\", assim como verificamos que de \206\177 derivamos uma f\195\179rmula \207\134 e tamb\195\169m verificamos que de  \206\178 derivamos igualmente uma f\195\179rmula \207\134, ent\195\163o pela regra <b>(\226\136\168 E)</b> verifica-se \207\134. Assim como a regra (\226\138\165<sub>c</sub>), ela possibilita o uso de hip\195\179tese, funciona do seguinte modo: </p>\n<pre><code>dis_e (A \\/ B) h0 h1.\nass P1.</code></pre>\n\n<p>Observe os par\195\162metros da regra s\195\163o a f\195\179rmula com a disjun\195\167\195\163o a ser eliminada (\206\177 \226\136\168 \206\178), e duas marcas novas h0 e h1, para as respectivas f\195\179rmulas da disjun\195\167\195\163o (\206\177) e  (\206\178). Escolhemos justamente a disjun\195\167\195\163o da premissa P1.</p>\n\n<p>Agora, continuamos a demonstra\195\167\195\163o realizando a deriva\195\167\195\163o de (C \\/ D),  a partir da hip\195\179tese h1 com (A).</p>\n\n<pre><code>dis_i1.\nimp_e A.\nexact P2.\nexact h0.</code></pre>\n\n<p>Voc\195\170 poderia continuar a demonstra\195\167\195\163o realizando a deriva\195\167\195\163o de (C \\/ D),  a partir da hip\195\179tese h2?</p>\n\n<code>\n???\n</code><br/><br/>\n\n\n<p><i>- Elimina\195\167\195\163o da disjun\195\167\195\163o</i> (\226\136\168 E): Significa que temos uma deriva\195\167\195\163o de \207\136, se tivermos as seguintes tr\195\170s condi\195\167\195\181es: \n<b>(a)</b> a asser\195\167\195\163o \"\206\177 \226\136\168 \206\178\" se verifica com uma uma deriva\195\167\195\163o D<sub>1</sub><br/>\n<b>(b)</b> se supondo \206\177 com uma marca nova h0, temos uma deriva\195\167\195\163o D<sub>2</sub> de \207\136.<br/>\n<b>(c)</b> se supondo \206\178 com uma marca nova h1, temos uma deriva\195\167\195\163o D<sub>3</sub> de \207\136.<br/>\n<b>(d)</b> n\195\163o ocorra conflito de marcas nas deriva\195\167\195\181es, que a marca h<sub>i</sub> s\195\179 descarte hip\195\179tese \206\177 na deriva\195\167\195\163o D<sub>2</sub> e que marca h<sub>j</sub> s\195\179 descarte hip\195\179tese \206\178 na deriva\195\167\195\163o D<sub>3</sub>.</p><br/>\n<p>No Coq, o comando utilizado \195\169 <b>dis_e (\206\177 \226\136\168 \206\178) h1 h2</b>, com tr\195\170s par\195\162metros, tal que (\206\177 \226\136\168 \206\178) \195\169 a formula com a disjun\195\167\195\163o eliminada; h1 e h2 s\195\163o marcas novas.</p><br/>\n\n<p><i>(Confira o Livro <a href=\"http://www.dimap.ufrn.br/%7Ejmarcos/courses/LC/Ementa.htm\">DGM</a>, Cap. 1, <b>p\195\161gs. 36-39</b>. )</i></p>\n\n<center><img  src=\"images/logic/r-disj.png\" alt=\"Rules of Disjunction\" width=\"550\"  /></center><br/><br/>\n", [
		], (
# 0 "../logic-lessons/lesson5/step3/step.ml"
fun input output ->
  find_in  "example_13 is defined" output

		));
		(4, "Regras da Disjun\195\167\195\163o - Autoavalia\195\167\195\163o", "<h3>Regras da Disjun\195\167\195\163o - Autoavalia\195\167\195\163o</h3>\n\n<p>Vimos as regras (\226\136\168 I <sub>1</sub>), (\226\136\168 I <sub>2</sub>) e (\226\136\168 E). </p><br/>\n\n<p>Confira demonstrando que : \"\226\138\162 (\206\177 \226\136\168 (\206\178 \226\136\167 \206\179)) \226\134\146 ((\206\177 \226\136\168 \206\178) \226\136\167 (\206\177 \226\136\168 \206\179))\".</p>\n \n<pre><code>Require Import ProofWeb.\nVariables A B C : Prop.\nTheorem example_14 :  (A \\/ (B /\\ C)) -> ((A \\/ B) /\\ (A \\/ C)).\nProof.</code></pre>\n\n<p><b><i>M\195\163os \195\160 obra!</i></b></p><br/>\n\n<code>\n? ? ?\n</code>\n<br/><br/>\n\n<p><i>(Confira o Livro <a href=\"http://www.dimap.ufrn.br/%7Ejmarcos/courses/LC/Ementa.htm\">DGM</a>, Cap. 1, p\195\161gs. 30-31. )</i></p><br/>\n\n<center><img  src=\"images/logic/r-disj.png\" alt=\"Rules of Disjunction\" width=\"550\"  /></center><br/><br/>\n", [
		], (
# 0 "../logic-lessons/lesson5/step4/step.ml"
fun input output ->
  find_in  "example_14 is defined" output

		));
	]);
	(6, "Regras da Biimplica\195\167\195\163o", "<h3>Regras da Biimplica\195\167\195\163o</h3>\n", [
	], [
		(1, "Regras da Biimplica\195\167\195\163o I", "<h3>Regras da Biimplica\195\167\195\163o I</h3>\n\n<p>Neste passo vamos explorar as regras da implica\195\167\195\163o (\226\134\148 I), (\226\134\148 E <sub>1</sub>) e (\226\134\148 E <sub>2</sub>).</p>\n\n<p>\"\194\172\206\177 \226\134\148 (\206\177 \226\136\168 \206\178) \226\138\162 (\194\172\206\177 \226\136\167 \206\178)\".</p>\n  \n \n<pre><code>Require Import ProofWeb.\nVariables A B : Prop.\nHypothesis P1 : (~A <-> (A \\/ B).\nTheorem example_15 : (~A /\\ B).\nProof.</code></pre>\n\niff_i h1 h2.<br/>\n\niff_e1 (\206\177).<br/>\n\niff_e2 (\206\177).<br/>\n\n<center><img  src=\"images/logic/r-iff.png\" alt=\"Rules of Biimplication\" width=\"550\"  /></center><br/><br/>\n", [
		], (
# 0 "../logic-lessons/lesson6/step1/step.ml"
fun input output ->
  find_in  "example_15 is defined" output

		));
		(2, "Regras da Biimplica\195\167\195\163o II", "<h3>Regras da Biimplica\195\167\195\163o II</h3>\n\n<p>Neste passo vamos explorar mais as regras da implica\195\167\195\163o (\226\134\148 I), (\226\134\148 E <sub>1</sub>) e (\226\134\148 E <sub>2</sub>).</p>\n\n<p>\"(\206\177 \226\134\148 \206\178), (\206\177 \226\134\148 \206\179) \226\138\162 (\206\178 \226\134\148 \206\179)\".</p>\n\n<pre><code>Require Import ProofWeb.\nVariables A B C : Prop.\nHypothesis P1 : (A <-> B).\nHypothesis P2 : (A <-> C).\nTheorem example_16 : (B <-> C).\nProof.</code></pre>\n\niff_i h1 h2.<br/>\n\niff_e1 (\206\177).<br/>\n\niff_e2 (\206\177).<br/>\n\n<center><img  src=\"images/logic/r-iff.png\" alt=\"Rules of Biimplication\" width=\"550\"  /></center><br/><br/>\n", [
		], (
# 0 "../logic-lessons/lesson6/step2/step.ml"
fun input output ->
  find_in  "example_16 is defined" output

		));
		(3, "Regras da Biimplica\195\167\195\163o - Autoavalia\195\167\195\163o", "<h3>Regras da Biimplica\195\167\195\163o - Autoavalia\195\167\195\163o</h3>\n\n\n\niff_i h1 h2.<br/>\n\niff_e1 (\206\177).<br/>\n\niff_e2 (\206\177).<br/>\n\n<center><img  src=\"images/logic/r-iff.png\" alt=\"Rules of Biimplication\" width=\"550\"  /></center><br/><br/>\n", [
		], (
# 0 "../logic-lessons/lesson6/step3/step.ml"
fun input output ->
  find_in  "example_00" output

		));
	]);
	(7, "Estrat\195\169gias de Demonstra\195\167\195\163o", "<h3>Estrat\195\169gias de Demonstra\195\167\195\163o</h3>\n", [
	], [
		(1, "Resumo das Regras", "<h3>Resumo das Regras</h3>\n\nAqui est\195\163o as regras de cada conectivo que apresentamos passo-a-passo:\n\n<center><img  src=\"images/logic/all-r-dn.png\" alt=\"Rules of Natural Deduction\" width=\"550\"  /></center><br/>\n\n<p>Observe que para cada conectivo h\195\161 regras de introdu\195\167\195\163o e elimina\195\167\195\163o.  </p><br/>\n<p>Note tamb\195\169m que algumas regras s\195\163o acompanhadas de <i>subf\195\179rmulas</i>, ou <i>marcas</i> das hip\195\179teses que eventualmente s\195\163o descartadas (trataremos com mais detalhes adiante). </p>\n\n", [
		], (
# 0 "../logic-lessons/lesson7/step1/step.ml"
fun input output ->
  find_in  "example_00" output

		));
		(2, "Estrat\195\169gias de Demonstra\195\167\195\163o - Lemas I", "<h3>Estrat\195\169gias de Demonstra\195\167\195\163o - Lemas I</h3>\n\n<p>Neste passo trabalhar com o uso de Lemas.</p>\n\n<p>Vamos demonstrar o seguinte \"\194\172(\206\177 \226\136\167 \206\180), \194\172(\206\178 \226\136\167 \194\172\206\180) \226\138\162 \194\172(\206\177 \226\136\167 \206\178)\" usando o terceiro excluido como lema \"\226\138\162 (\206\177 \226\136\168 \194\172\206\177)\".</p>\n\n\n<pre><code>Require Import ProofWeb.\nVariables A B C D : Prop.\nHypothesis P1 : ~(A /\\ D).\nHypothesis P2 : ~(B /\\ ~D).\n\nLemma TE : forall A , (A \\/ ~A).\nProof.\nintros.\nPBC h0.\nneg_e (A0 \\/ ~ A0).\nass h0.\ndis_i2.\nneg_i h1.\nneg_e (A0 \\/ ~ A0).\nass h0.\ndis_i1.\nass h1.\nQed.\n\nTheorem example_18 : ~(A /\\ B).\nProof.\nneg_i h1.\ndis_e (D \\/ ~D) h2 h3.\napply TE.\nneg_e (A /\\ D).\nexact P1.\ncon_i .\ncon_e1 (B).\nexact h1.\nexact h2.\nneg_e (B /\\ ~D).\nexact P2.\ncon_i .\ncon_e2 (A).\nexact h1.\nexact h3.\nQed.\n</code></pre>\n", [
		], (
# 0 "../logic-lessons/lesson7/step2/step.ml"
fun input output ->
  find_in  "example_00" output

		));
		(3, "Estrat\195\169gias de Demonstra\195\167\195\163o - Lemas II", "<h3>Estrat\195\169gias de Demonstra\195\167\195\163o - Lemas II</h3>\n\n<p>Neste passo vamos trabalhar com o uso de Lemas.</p>\n\n", [
		], (
# 0 "../logic-lessons/lesson7/step3/step.ml"
fun input output ->
  find_in  "example_00" output

		));
	]);
	(8, "Sistema Dedutivo Nc", "<h3>Sistema Dedutivo Nc</h3>\n", [
		("fr", ("Syst\195\168me de Deduction N<sub>p</sub> avec le Coq", "<h3>Syst\195\168me de Deduction N<sub>p</sub> avec le Coq</h3>\n"));
	], [
		(1, "L\195\179gica de Primeira Ordem no Coq", "<h3>L\195\179gica de Primeira Ordem no Coq</h3>\n\n<p>Nesta li\195\167\195\163o vamos apresentar um sistema dedutivo para a L\195\179gica de Primeira Ordem: o sistema de dedu\195\167\195\163o natural <i>N<sub>c</sub></i>.</p><br/>\n\n\n<p><i>(Detalhes? leia o Livro <a href=\"http://www.dimap.ufrn.br/%7Ejmarcos/courses/LC/Ementa.htm\">DGM</a>, Cap. 3.1, p\195\161gs. 27-43. )</i></p><br/>\n\n<p><i>(Materiais e Exercicios <a href=\"http://sites.google.com/site/sequiturquodlibet/courses/laac/dn-lcpo\">aqui</a>.)</i></p><br/>\n\nConfira tamb\195\169m os Verbetes wikip\195\169dicos:<br/>\n- <a href=\"http://pt.wikipedia.org/wiki/L%C3%B3gica_de_primeira_ordem\"> L\195\179gica de primeira ordem</a><br/>\n- <a href=\"http://pt.wikipedia.org/wiki/L%C3%B3gica_de_segunda_ordem\">L\195\179gica de segunda ordem</a><br/>\n- <a href=\"http://pt.wikipedia.org/wiki/L%C3%B3gica_de_ordem_superior\">L\195\179gica de ordem superior</a><br/>\n- <a href=\"http://pt.wikipedia.org/wiki/Quantifica%C3%A7%C3%A3o\">Quantifica\195\167\195\163o</a><br/>\n- <a href=\"http://pt.wikipedia.org/wiki/Quantifica%C3%A7%C3%A3o_universal\">Quantifica\195\167\195\163o universal</a><br/>\n- <a href=\"http://pt.wikipedia.org/wiki/Quantifica%C3%A7%C3%A3o_existencial\">Quantifica\195\167\195\163o existencial</a><br/>\n- <a href=\"http://pt.wikipedia.org/wiki/Atribui%C3%A7%C3%A3o_%28l%C3%B3gica%29\">Atribui\195\167\195\163o</a><br/>\n\n<br/>\n\n\n\n", [
			("fr", ("Logique du Premier Ordre avec le Coq", "<h3>Logique du Premier Ordre avec le Coq</h3>\n\n"));
		], (
# 0 "../logic-lessons/lesson8/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
];;
