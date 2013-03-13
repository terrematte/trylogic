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
	"fr", [ "Try OCaml", "OCaml pas à pas";
"English", "Français";
"OCaml is a strongly typed functional language. It is concise and fast, enabling you to improve your coding efficiency while producing code with higher quality.",
"OCaml est un langage fonctionnel fortement typé. Concis et rapide, il vous permet d'améliorer votre productivité tout en produisant du code de meilleure qualité !";
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
	"tr", [ "English", "Turkçe";

(* The rest needs to be done... *)
"Try OCaml", "Try OCaml";
"OCaml is a strongly typed functional language. It is concise and fast, enabling you to improve your coding efficiency while producing code with higher quality.",
"OCaml is a strongly typed functional language. It is concise and fast, enabling you to improve your coding efficiency while producing code with higher quality.";
"Click here to execute this code",
"Click here to execute this code";
 ];
]
let lessons = [
	(1, "Simple Expressions", "<h3>Simple Expressions</h3>\n", [
		("fr", ("Expressions Simples", "<h3>Expressions Simples</h3>\n"));
	], [
		(1, "Simple Expressions", "<h3>Simple Expressions</h3>\n\n<p>Numerical expressions are easy to compute in OCaml. For example:</p>\n\n<p><code>1+2</code></p>\n\n<br/>\n\n<p>Strings are also easy to define. For example, you can define a string with your name:</p>\n\n<p><code>\"Mary\"</code></p>\n\n<br/>\n\n<p>The basic element of a string is a char:</p>\n\n<p><code>'a'</code></p>\n", [
			("fr", ("Expressions Simples", "<h3>Expressions Simples</h3>\n\n<p>Les expressions numeriques sont faciles \195\160 \195\169crire en OCaml. Par\nexemple :</p>\n\n<p><code>1+2</code></p>\n\n<br/>\n\n<p>Les cha\195\174nes (<em>string</em>) sont aussi faciles \195\160 cr\195\169er. Par\nexemple, vous pouvez cr\195\169er une cha\195\174ne avec votre pr\195\169nom :</p>\n\n<p><code>\"Mary\"</code></p>\n\n<br/>\n\n<p>L'\195\169l\195\169ment de base d'une cha\195\174ne est le caract\195\168re (<em>char</em>) :</p>\n\n<p><code>'a'</code></p>\n"));
		], (
# 0 "../ocaml-lessons/lesson1/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
		(2, "Lists and arrays", "<h3>Lists and arrays</h3>\n\n<p>Lists and arrays are predefined data structures, for\nexample you can have a list of integers:</p>\n<p><code>[ 42; 1; 55 ]</code></p>\n\n<br />\n<p>An array of strings:<p>\n<p><code>[|\"John\"; \"Doe\"|]</code></p>\n", [
			("fr", ("Listes et tableaux", "<h3>Listes et tableaux</h3>\n\n<p>Les listes et tableaux sont des structures de donn\195\169es\n  pr\195\169d\195\169finies. Par exemple on peut avoir une liste d'entier:</p>\n<p><code>[ 42; 1; 55 ]</code></p>\n\n<br />\n<p>Un tableau de cha\195\174ne de caract\195\168res:<p>\n<p><code>[|\"John\"; \"Doe\"|]</code></p>\n"));
		], (
# 0 "../ocaml-lessons/lesson1/step2/step.ml"
fun input output ->
  find_in  "- : string array =" output

		));
		(3, "Operations on lists", "<h3>Operations on lists</h3>\n\n<p>You can use some predefined functions on lists such as reversing the list</p>\n<p><code>List.rev [1; 2; 3]</code></p>\n\n<br />\n<p>Get the first element of the list:</p>\n<p><code>List.hd [1; 2; 3]</code></p>\n\n<br />\n<h3>Operations on arrays</h3>\n\n<p>You can also use some predefined functions on arrays such as\nconcatenate two arrays</p>\n<p><code>Array.append [| 1; 2 |] [| 3; 4; 5 |]</code></p>\n\n<br />\n<p>To get the element number <code>i</code> of an array, you have two\nways to do this (don't forget, the first element has number <code>0</code>):</p>\n<p><code>Array.get [| 42; 51; 32 |] 2 </code></p>\n\n<p>or</p>\n\n<p><code>[| 42; 51; 32 |].(2) </code></p>\n\n\n", [
			("fr", ("Op\195\169rations sur les listes", "<h3>Op\195\169rations sur les listes</h3>\n\n<p><p>On retrouve des fonctions pr\195\169d\195\169finies sur les listes tels que le\n  renversement d'une liste:</p>\n<p><code>List.rev [1; 2; 3]</code></p>\n\n<br />\n<p>R\195\169cup\195\169rer le premier \195\169lement d'une liste:</p>\n<p><code>List.hd [1; 2; 3]</code></p>\n\n<br />\n<h3>Op\195\169rations sur les tableaux</h3>\n\n<p><p>On a \195\169galement des fonctions pr\195\169d\195\169finies sur les tableaux, comme\n  la concat\195\169nation de deux tableaux:</p>\n<p><code>Array.append [| 1; 2 |] [| 3; 4; 5 |]</code></p>\n\n<br />\n<p>Il existe deux fa\195\167ons de faire pour r\195\169cup\195\169rer le i\195\168me\n d'une tableau: (ne pas oublier que le premier \195\169l\195\169ment est \195\160 la\n position <code>0</code>):</p>\n<p><code>Array.get [| 42; 51; 32 |] 2 </code></p>\n\n<p>ou</p>\n\n<p><code>[| 42; 51; 32 |].(2) </code></p>\n"));
		], (
# 0 "../ocaml-lessons/lesson1/step3/step.ml"
fun input output ->
  find_in  "- : int = 32" output

		));
		(4, "Basic operations on strings", "<h3>Basic operations on strings</h3>\n\n<p>Strings are sequences of chars. It is possible to create a\nstring from just one char, using:</p>\n<p><code>String.make 10 'x'</code></p>\n\n<br />\n<p>Strings can also be created by joining other strings:</p>\n<p><code>\"Mary\" ^ \" and \" ^ \"John\"</code></p>\n\n<br />\n<p>It might also be interesting to get the length of a string:</p>\n\n<p><code>String.length \"abcdefghijklmnopqstuvwxyz\"</code></p>\n\n<p>(and yes, one character is missing !)</p>\n", [
			("fr", ("Op\195\169rations sur les cha\195\174nes de caract\195\168res", "<h3>Op\195\169rations sur les cha\195\174nes de caract\195\168res</h3>\n\n<p>Les cha\195\174nes de caract\195\168res sont des s\195\169quences de caract\195\168res. Il est\n tout \195\160 fait possible de cr\195\169er une cha\195\174ne de caract\195\168re \195\160 partir d'un\n seul caract\195\168re, en utilisant:</p>\n<p><code>String.make 10 'x'</code></p>\n\n<br />\n\n<p>Les cha\195\174nes de caract\195\168res peuvent \195\169galement \195\170tre cr\195\169\195\169r en\n  concat\195\169nant plusieurs autres cha\195\174nes:</p>\n<p><code>\"Mary\" ^ \" and \" ^ \"John\"</code></p>\n\n<br />\n<p>Il peut \195\170tre int\195\169ressant de r\195\169cuperer la taille d'une cha\195\174ne de\n  caract\195\168re:</p>\n\n<p><code>String.length \"abcdefghijklmnopqstuvwxyz\"</code></p>\n\n<p>(et oui, il manque un caract\195\168re !)</p>\n\n<br />\n<p>Il y a bien s\195\187r d'autres op\195\169rations disponibles sur les cha\195\174nes de\n  caract\195\168res, comme une fonction qui retourne une copie de l'argument,\n  avec toutes les majuscules transform\195\169es en minuscules:</p>\n<p><code>String.lowercase \"MARY\"</code></p>\n\n<br />\n<p>Voyons un exemple plus pratique, qui g\195\169n\195\168re un nom de fichier \195\160\n  partir d'un composant:</p>\n<p><code>String.concat \"/\" [\"\"; \"usr\"; \"local\"; \"bin\"]</code></p>\n<p>Notez que le second argument est une liste de cha\195\174nes de caract\195\168res</p>\n\n<br />\n<p>Il peut \195\170tre parfois utile d'extraire un entier depuis une cha\195\174ne\n  de caract\195\168res. Pour cela rien de plus simple:</p>\n<p><code>int_of_string \"546\"</code></p>\n"));
		], (
# 0 "../ocaml-lessons/lesson1/step4/step.ml"
fun input output ->
  find_in "- : int =" output


		));
		(5, "More operations on strings", "<h3>More operations on strings</h3>\n\n<p>There are many operations available on strings, like a function\nwhich returns a copy of the argument, with all uppercase letters\ntranslated to lowercase:</p>\n<p><code>String.lowercase \"MARY\"</code></p>\n\n<br />\n<p>Here's a more practical example, generating a filename from components: </p>\n<p><code>String.concat \"/\" [\"\"; \"usr\"; \"local\"; \"bin\"]</code></p>\n<p>Note that the second argument is a list of strings.</p>\n\n<br />\n<p>It is sometimes useful to extract an integer from a string. This is\neasy in OCaml:</p>\n<p><code>int_of_string \"546\"</code></p>\n", [
			("fr", ("Op\195\169rations sur les cha\195\174nes de caract\195\168res", "<h3>Op\195\169rations sur les cha\195\174nes de caract\195\168res</h3>\n\n<p>Les cha\195\174nes de caract\195\168res sont des s\195\169quences de caract\195\168res. Il est\n tout \195\160 fait possible de cr\195\169er une cha\195\174ne de caract\195\168re \195\160 partir d'un\n seul caract\195\168re, en utilisant:</p>\n<p><code>String.make 10 'x'</code></p>\n\n<br />\n\n<p>Les cha\195\174nes de caract\195\168res peuvent \195\169galement \195\170tre cr\195\169\195\169r en\n  concat\195\169nant plusieurs autres cha\195\174nes:</p>\n<p><code>\"Mary\" ^ \" and \" ^ \"John\"</code></p>\n\n<br />\n<p>Il peut \195\170tre int\195\169ressant de r\195\169cuperer la taille d'une cha\195\174ne de\n  caract\195\168re:</p>\n\n<p><code>String.length \"abcdefghijklmnopqstuvwxyz\"</code></p>\n\n<p>(et oui, il manque un caract\195\168re !)</p>\n\n<br />\n<p>Il y a bien s\195\187r d'autres op\195\169rations disponibles sur les cha\195\174nes de\n  caract\195\168res, comme une fonction qui retourne une copie de l'argument,\n  avec toutes les majuscules transform\195\169es en minuscules:</p>\n<p><code>String.lowercase \"MARY\"</code></p>\n\n<br />\n<p>Voyons un exemple plus pratique, qui g\195\169n\195\168re un nom de fichier \195\160\n  partir d'un composant:</p>\n<p><code>String.concat \"/\" [\"\"; \"usr\"; \"local\"; \"bin\"]</code></p>\n<p>Notez que le second argument est une liste de cha\195\174nes de caract\195\168res</p>\n\n<br />\n<p>Il peut \195\170tre parfois utile d'extraire un entier depuis une cha\195\174ne\n  de caract\195\168res. Pour cela rien de plus simple:</p>\n<p><code>int_of_string \"546\"</code></p>\n"));
		], (
# 0 "../ocaml-lessons/lesson1/step5/step.ml"
fun input output ->
  find_in "- : int =" output


		));
		(6, "Operations on Tuples", "<h3>Operations on Tuples</h3>\n\n<p>A tuple consists of values (zero or more), enclosed in parentheses\nand separated by commas. Note that you can have differents types for\neach element, remember</p>\n<p><code>(42, \"John\", true)</code></p>\n\n<br />\n<p>When you have a pair (a tuple with two elements), you can use some\npredefined functions like get the first element:</p>\n<p><code>fst (42, \"John\")</code></p>\n\n<br />\n<p>Or the second element:</p>\n<p><code>snd (42, \"John\")</code></p>\n", [
			("fr", ("Operations sur les tuples", "<h3>Operations sur les tuples</h3>\n\n<p>Un tuple est constitu\195\169 de valeurs (z\195\169ro ou plus), entre parenth\195\168ses\net s\195\169par\195\169s par des virgules. Notez que vous pouvez avoir diff\195\169rents types pour\nchaque \195\169l\195\169ment, par exemple :<p>\n<p><code>(42, \"John\", true)</code></p>\n\n<br />\n<p>Quand vous avez une pair (un tuple avec deux \195\169l\195\169ments), il existe\n  quelques fonctions pr\195\169d\195\169finies, comme une fonction pour r\195\169cup\195\169rer le\n  premier \195\169l\195\169ment:</p>\n<p><code>fst (42, \"John\")</code></p>\n\n<br />\n<p>Ou le second \195\169l\195\169ment:</p>\n<p><code>snd (42, \"John\")</code></p>\n"));
		], (
# 0 "../ocaml-lessons/lesson1/step6/step.ml"
fun input output -> find_in "- : string =" output

		));
	]);
	(2, "A Taste of Imperative Programming", "<h3>A Taste of Imperative Programming</h3>\n", [
	], [
		(1, "Variables", "<h3>Variables</h3>\n\n<p>As in other languages, you can associate a name to a value. To do\nthat, we use the <code>let</code> syntax which associates the result\nof some computation with a name:</p>\n\n<p><code>let x = 6 * 7</code></p>\n\n<br />\n\n<p>We can now check the value associated with <code>x</code> in the\ntoplevel:</p>\n<p><code>x</code></p>\n\n<br />\n<p>And we can use the name where we would like the value:</p>\n<p><code>let y = x + 1</code></p>\n", [
		], (
# 0 "../ocaml-lessons/lesson2/step1/step.ml"
fun input output -> find_in "val y : int = 43" output

		));
		(2, "Mutable Variables", "<h3>Mutable Variables</h3>\n\n<p>In OCaml, you cannot change the value associated with a name after\nits definition. Trying to do so will trigger a compilation error:</p>\n<p><code>x <- x + 1</code></p>\n\n<p>You will better understand the error message later.</p>\n\n<br />\n<p>If you really want to modify the value associated with a name, you\nmust use a trick. OCaml provides a function <code>ref</code> that\ncreates a special value that can be modified later (a reference):</p>\n<p><code>let x = ref 42</code></p>\n\n<br />\n<p>You can then change the value of the reference associated\nwith <code>x</code> using the <code>:=</code> operator:</p>\n<p><code>x := 100 / 4</code></p>\n\n<br />\n<p>You can also access the value contained in the reference using the\noperator <code>!</code>:</p>\n\n<p><code>let y = !x + 1</code></p>\n", [
		], (
# 0 "../ocaml-lessons/lesson2/step2/step.ml"
fun input output ->
  find_in " : int = " output && find_in " !" input


		));
		(3, "Sequences and Printing", "<h3>Sequences and Printing</h3>\n\n<p>OCaml provides different functions to print basic types. For\nexample:</p>\n\n<p><code>print_int 3</code></p><br/>\n\n<p>and:</p>\n\n<p><code>print_string \"Hello\"</code></p><br/>\n\n<p>Sequences of expressions are separated by <code>;</code>:</p>\n\n<pre><code>print_string \"x = \";\nprint_int !x;\nprint_newline ()</code></pre>\n\n<p>A more powerful method to print values\nis <code>Printf.printf</code>, whose behavior is similar\nto <code>printf</code> in C:</p>\n\n<p><code>Printf.printf \"x = %d. Bye %s\\n\" !x \"John\"</code></p>\n\n<br/>\n", [
		], (
# 0 "../ocaml-lessons/lesson2/step3/step.ml"
fun input output ->
  find_in " : unit = " output && find_in "Printf.printf" input


		));
		(4, "For loops", "<h3>For loops</h3>\n\n<p>Let's define a reference on a list:</p>\n\n<p><code>let xl = ref []</code></p>\n<br/>\n\n<p>OCaml provides a simple <code>for</code> loop to iterate on\nintegers in a range:</p>\n\n<pre><code>for i = 1 to 10 do\n  xl := i :: !xl;\ndone;\n!xl\n</code></pre><br/>\n\n<p>Here, for each value between 1 and 10, we have added it in this\norder at the head of the reference.</p>\n\n<p>Of course, if we want them in the correct order, we need to reverse\nthe list:</p>\n\n<p><code>List.rev !xl</code></p>\n<br/>\n<p>Or we can just execute the loop directly from the upper bound to the\nlower bound:</p>\n\n<pre><code>for i = 10 downto 1 do\n xl := i :: !xl\ndone;\n!xl</code></pre>\n<br/>\n\n<p>\n", [
		], (
# 0 "../ocaml-lessons/lesson2/step4/step.ml"
fun input output ->
  find_in "4; 5" output && find_in " downto" input


		));
		(5, "Computing Conditions", "<h3>Computing Conditions</h3>\n\n<p>Boolean values in OCaml can be either <code>true</code>\nor <code>false</code>. They are often created from comparing other\nvalues. For example:</p>\n\n<p><code>1 &gt; 2</code></p>\n<br />\n\n<p>OCaml's comparison operators can be used on values of any type,\nnot only on numerical values. We can compare strings and characters\ntoo:</p>\n\n<p><code>\"aaaaaa\" &lt; \"bbb\"</code></p>\n<p><code>\"3\" &lt;= \"22\"</code></p>\n<p><code>22 &gt;= 3</code></p>\n<br />\n\n<p>To test equality, you can use <quote>=</quote>, and for inequality, there\nis <quote>&lt;&gt;</quote>. For example:</p>\n\n<p><code>1 = 1</code></p>\n<p><code>1 &lt;&gt; 1</code></p>\n<p><code>\"1\" = 1</code></p>\n\n<br />\n\n<p>Oops, OCaml does not allow you to compare values with different\ntypes, so we must be more careful:</p>\n\n<p><code>\"1\" = string_of_int 1</code></p>\n", [
		], (
# 0 "../ocaml-lessons/lesson2/step5/step.ml"
fun input output ->
  find_in "string_of_int" input && find_in "- : bool" output

		));
		(6, "If then else", "<h3>If then else</h3>\n\n<p>Now that we know how to test conditions, we can use them to choose\nbetween computations. Let's define two values : </p>\n\n<p><code>let a = 1 and b = 2</code></p><br/>\n\n<p>We can compute the minimum of them:</p>\n\n<pre><code>Printf.printf \"min(%d,%d) = %d\\n\" a b\n    (if a &lt; b then a else b)</code></pre><br/>\n\n<p>We can of course execute sequences within branches:</p>\n\n<pre><code>let z = if a &lt; 100 then begin\n    print_string \"return at least 100 !\";\n    print_newline ();\n    100\n end else a\n</code></pre>\n", [
		], (
# 0 "../ocaml-lessons/lesson2/step6/step.ml"
fun input output ->
  find_in " : int = 100" output



		));
		(7, "While loops", "<h3>While loops</h3>\n\n<p>OCaml also provides a <code>while</code> loop, to execute some code\nas long as an expression is true:</p>\n\n<pre><code>while !x &gt; 20 do\n  print_int !x; print_newline ();\n  x := !x - 2\ndone</code></pre>\n\n<!---\n<p>For example, the following code will wait for you to say \"yes\":</p>\n\n<pre><code>let cond = ref true;;\nwhile !cond do\n  print_string \"Say 'yes':\";\n  cond := ( input_line stdin <> \"yes\" )\ndone;;\n</code></pre>\n--->\n", [
		], (
# 0 "../ocaml-lessons/lesson2/step7/step.ml"
fun input output ->
  find_in "while" input


		));
		(8, "Congratulations", "<h3>Congratulations</h3>\n\n<p>You have seen that OCaml allows you to use some imperative style of\nprogramming. Some functional programmers will tell you that\nside-effects are bad: they are right, in many cases, but don't listen\nto them too early !</p>\n\n\n<p>In the next lessons, you will see that by combining both imperative\nand functional programming styles, you can do wonders !</p>\n\n<p>Use <code>next()</code> to go to the next lesson !</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson2/step8/step.ml"
fun input output ->
  find_in " : unit" output && find_in "next" input


		));
	]);
	(3, "Functions", "<h3>Functions</h3>\n", [
	], [
		(1, "Defining a one-argument function", "<h3>Defining a one-argument function</h3>\n\n<p>In OCaml defining a function with one argument, will look like this:</p>\n<p><code>let incr n = n + 1</code></p>\n\n\n<br />\n<p>You can also use tuples:<p>\n<p><code>let plus_and_divide (x, y, z) = (x + y) / z</code></p>\n<p>Note that even you have <code>x</code>, <code>y</code> and <code>z</code> as\narguments, this syntax with tuples means that you call the function\nplus_and_divide with <strong>one</strong> argument which is a triple in\nthis case.<p>\n\n<br />\n<p>To call a function, nothing is simpler:</p>\n<p><code>incr 42</code></p>\n<p><code>plus_and_divide (10, 20, 2)</code></p>\n", [
			("fr", ("D\195\169finir une fonction avec un argument", "<h3>D\195\169finir une fonction avec un argument</h3>\n\n<p>En OCaml, il existe diff\195\169rente manni\195\168re de d\195\169finir une fonction\n  avec un seul argument. Par exemple on peut utiliser le mot-cl\195\169 <code>function</code>:</p>\n<p><code>let incr_v1 = function n -> n + 1</code></p>\n\n<br />\n<p>On peut \195\169galement utiliser les tuples comme argument::<p>\n<p><code>let plus_and_divide (x, y, z) = (x + y) / z</code></p>\n<p>Notez que malgr\195\169 les trois\n  variables <code>x</code>, <code>y</code> and <code>z</code>, le\n  triplet est vu comme <strong>un</strong> seul argument de la\n  fonction.<p>\n\n<br />\n<p>Pour appeler une fonction, rien de plus simple:</p>\n<p><code>incr 42</code></p>\n<p><code>plus_and_divide (10, 20, 2)</code></p>\n"));
		], (
# 0 "../ocaml-lessons/lesson3/step1/step.ml"
fun _ output ->
  find_in  "- : int = 15" output

		));
		(2, "Defining a multiple-arguments function", "<h3>Defining a multiple-arguments function</h3>\n\n<p>In C or Java, a function <code>plus</code>, will look like:\n<p><code>int plus (int x, int y) { return x + y; }</code></p>\n\n<br />\n<p>Then the call to this function, will be:</p>\n<p><code>plus (1, 2);</code></p>\n\n<br />\n<p>In OCaml, the same function <code>plus</code> will be define like follow:</p>\n<p><code>let plus x y = x + y</code></p>\n\n<br />\n<p>To call this function, nothing is simpler:</p>\n<p><code>plus 1 2</code></p>\n<p>Note that there is no need to bracket or comma between function's parameters.</p>\n", [
			("fr", ("D\195\169finir une fonction avec plusieurs arguments", "<h3>D\195\169finir une fonction avec plusieurs arguments</h3>\n\n<p>En C ou Java, pour d\195\169finir une fonction <code>plus</code>, on\n\195\169crirait quelque chose come:\n<p><code>int plus (int x, int y) { return x + y; }</code></xp>\n\n<br />\n<p>L'appel \195\160 cette fonction, ressemblerait donc \195\160:</p>\n<p><code>plus (1, 2);</code></p>\n\n<br />\n<p>En OCaml, la m\195\170me fonction <code>plus</code> serait d\195\169finie comme\n  suit:</p>\n<p><code>let plus x y = x + y</code></p>\n\n<br />\n<p>Pour utiliser cette fonction, rien de plus simple :</p>\n<p><code>plus 1 2</code></p>\n<p>On remarque ici aussi qu'il n'y a pas de parenth\195\168ses ni de virgules\n  entre les param\195\168tres de la fonction.</p>\n"));
		], (
# 0 "../ocaml-lessons/lesson3/step2/step.ml"
fun _ output ->
  find_in  "- : int =" output

		));
		(3, "Returning multiple values", "<h3>Returning multiple values</h3>\n\n<p>You will notice that in OCaml, there is no <code>return</code>\nstatement; to return a value, the whole body expression is implicitly returned.</p>\n\n<br />\n<p>To return multiple values, we will use tuples. For example:</p>\n<p><code>(2, 3, 4, 5)</code></p>\n\n<br />\n<p>We can write functions which will return multiple values thanks to\ntuples. For example:</p>\n<p><code>let divide x y = (x / y, x mod y)</code></p>\n\n<br />\n<p>Then we get:</p>\n<p><code>divide 10 3</code></p>\n", [
			("fr", ("Retourner plusieurs valeurs", "<h3>Retourner plusieurs valeurs</h3>\n\n<p>Vous aurez remarqu\195\169 qu'en OCaml, nous n'utilisons pas de\nmot-cl\195\169 <code>return</code> pour retourner une valeur, la valeur de\nl'ensemble du corps est implicitement ce qui est retourn\195\169.</p>\n\n<br />\n<p>Pour retourner donc plusieurs valeurs, nous allons utiliser les\ntuples. Par exemple:</p>\n<p><code>(2, 3, 4, 5)</code></p>\n\n<br />\n<p>On peut alors \195\169crire des fonctions qui retournent plusieurs\n  valeurs. Par exemple:</p>\n<p><code>let division x y = (x / y, x mod y)</code></p>\n\n<br />\n<p>On obtient alors:</p>\n<p><code>division 10 3</code></p>\n"));
		], (
# 0 "../ocaml-lessons/lesson3/step3/step.ml"
fun _ output ->
  find_in  "- : int * int =" output

		));
		(4, "Partial application", "<h3>Partial application</h3>\n\n<p>It is possible to apply a number of parameters less than what is\nrequired by a function. The result would be a partial application of a\nfunction.</p>\n\n\n<br />\n<p>Let's take the <code>plus</code> example:</p>\n<p><code>let plus x y = x + y</code></p>\n\n<br />\n<p>Using the partial application, we could rewrite the function\n<code>incr</code>, by giving just one argument to the\nfunction <code>plus</code>:</p>\n<p><code>let incr = plus 1</code></p>\n\n<br />\n<p>In this way, <code>plus 1</code> will return a function arity 1: <code> val incr : int -> int = &lt;fun&gt;</code><p>\n<p>To increment an integer by one, you can now use the function <code>incr</code>:</p>\n<p><code>incr 42</code></p>\n\n<br />\n<p>Similarly, we can define a function which double each integer\npassed as argument of the function:</p>\n<p><code>let mul x y = x * y </code><p>\n<p><code>let double = mul 2</code><p>\n<p><code>double 8</code><p>\n", [
			("fr", ("Application partielle", "<h3>Application partielle</h3>\n\n<p>Il est possible d'appliquer un nombre de param\195\168tres inf\195\169rieur \195\160 ce\n  qui est demand\195\169 par une fonction. Le r\195\169sultat est une expression\n  fonctionnelle, c'est ce qu'on appelle une application partielle.</p>\n\n<br />\n<p>Prenons l'exemple de la fonction <code>plus</code>:</p>\n<p><code>let plus x y = x + y</code></p>\n\n<br />\n<p>\195\128 l'aide de l'application partielle, nous pourrions r\195\169\195\169crire la\nfonction <code>incr</code>, en n'appliquant seulement qu'un argument</p>\n<p><code>let incr = plus 1</code></p>\n\n<br />\n<p>De cette mani\195\168re <code>plus 1</code> renvoie une fonction d'arit\195\169 1\n<code> val incr : int -> int = &lt;fun&gt;</code><p>\n<p>Il suffira donc de donner un entier \195\160 <code>incr</code> pour obtenir\nl'addition entre cet entier et <code>1</code>:</p>\n<p><code>incr 42</code></p>\n\n<br />\n<p>De la m\195\170me mani\195\168re on peut d\195\169finir une fonction qui multiplie par\n<code>2</code> chaque entier:</p>\n<p><code>let mul x y = x * y </code><p>\n<p><code>let double = mul 2</code><p>\n<p><code>double 8</code><p>\n"));
		], (
# 0 "../ocaml-lessons/lesson3/step4/step.ml"
fun _ output ->
  find_in  "- : int = 16" output

		));
		(5, "Anonymous functions", "<h3>Anonymous functions</h3>\n\n<p>In OCaml, we can write anonymous functions, functions defined\nwithout being bound to an identifier. For example:</p>\n<p><code>(fun x -> x + 1) 42</code></p>\n\n<br />\n<p>We can bound an anonymous function to an identifier. That's way, we\nhave severals ways to define functions:</p>\n<p><code>let incr = fun x -> x + 1</code></p>\n<p><code>incr 42</code></p>\n", [
			("fr", ("Fonctions anonymes", "<h3>Fonctions anonymes</h3>\n\n<p>En OCaml, on peut \195\169crire des fonctions anonymes, des fonctions sans\nnom.</p>\n<p><code>(fun x -> x + 1) 42</code></p>\n\n<br />\n<p>On peut \195\169galement nommer des fonctions anonymes. Gr\195\162ce \195\160 cela, on\n  a donc une autre fa\195\167on de d\195\169finir des fonctions:</p>\n<p><code>let incr = fun x -> x + 1</code></p>\n<p><code>incr 42</code></p>\n"));
		], (
# 0 "../ocaml-lessons/lesson3/step5/step.ml"
fun input _ ->
  find_in  "incr 42;;" input

		));
		(6, "Iterators", "<h3>Iterators</h3>\n\n<p>What is really fun is that you can now mix anonymous functions and\niterators.\nLet's take an example with list. If you want to increment all elements\nof a list, you will use <code>List.map</code>:</p>\n<p><code>List.map (fun x -> x + 1) [ 1; 2; 3; 4 ]</code></p>\n<br />\n<p>Here, <code>x</code> is an element of the list, <code>x + 1</code>\nis the operation that will be done on <code>x</code>. The result will\nbe a list with all its elements incremented by 1.</p>\n\n<br />\n<p>Here is an example with <code>fold_left</code>. If you want to\ncompute the sum of all elements of a list:</p>\n<pre><code>List.fold_left\n     (fun acc x -> acc + x)\n     0\n     [ 1; 2; 3; 4 ]\n</code></pre>\n\n<p>If we have :</p>\n<p><code>let plus = fun acc x -> acc + x</code></p>\n<p>then:</p>\n<p><code>List.fold_left plus 0 [ 1; 2; 3; 4 ]</code></p>\n<p>is equivalent to:</p>\n<p><code>plus (plus (plus (plus 0 1) 2) 3) 4</code></p>\n\n<br />\n<p>To finish, you may need to print values from a list:</p>\n<p><code>List.iter print_int [ 1; 2; 3; 4 ]</code></p>\n\n\n<br />\n<p>You can do the same sort of things on arrays too.</p>\n", [
			("fr", ("Les it\195\169rateurs", "<h3>Les it\195\169rateurs</h3>\n\n<p>On peut maintenant combiner les fonctions anonymes avec les\n  it\195\169rateurs pr\195\169d\195\169finis.\nPrenons un exemple avec les listes. Si on veut incr\195\169menter tous les\n  \195\169l\195\169ments d'une liste, on utilisera <code>List.map</code>:</p>\n<p><code>List.map (fun x -> x + 1) [ 1; 2; 3; 4 ]</code></p>\n<br />\n<p>Ici, <code>x</code> est un \195\169l\195\169ment de la liste, <code>x + 1</code>\n  est l'op\195\169ration qui sera effectu\195\169e sur <code>x</code>. Le r\195\169sultat\n  sera une liste dont tous ses \195\169l\195\169ments seront incr\195\169ment\195\169s de 1.</p>\n\n<br />\n<p>Un exemple avec <code>fold_left</code>. Si on veut faire la somme\n  de tous les \195\169l\195\169ments d'une liste :  </p>\n<pre><code>List.fold_left\n     (fun acc x -> acc + x)\n     0\n     [ 1; 2; 3; 4 ]\n</code></pre>\n\n<p>Si on a  :</p>\n<p><code>let plus = fun acc x -> acc + x</code></p>\n<p>alors:</p>\n<p><code>List.fold_left plus 0 [ 1; 2; 3; 4 ]</code></p>\n<p>est \195\169quivalent \195\160:</p>\n<p><code>plus (plus (plus (plus 0 1) 2) 3) 4</code></p>\n\n<br />\n<p>Pour finir, on peut avoir besoin d'afficher les valeurs d'une\n  liste, pour cela on utilisera <code>List.iter</code>:</p>\n<p><code>List.iter print_int [ 1; 2; 3; 4 ]</code></p>\n\n\n<br />\n<p>On peut faire les m\195\170mes op\195\169rations sur les tableaux.</p>\n"));
		], (
# 0 "../ocaml-lessons/lesson3/step6/step.ml"
fun _ output ->
  find_in  "- : unit = ()" output

		));
	]);
	(4, "Pattern-matching", "<h3>Pattern-matching</h3>\n", [
	], [
		(1, "Pattern-matching on integers", "<h3>Pattern-matching on integers</h3>\n\n<p>A powerful feature of OCaml is pattern-matching.\n\n  For simple values as integers, pattern-matching is quite similar to\n  case switches in other languages (<em>_</em> corresponds to the\n  default case). Moreover, each case is handled in chronological order:\n\n<pre><code>let string_of_int x = match x with\n   | 0 -> \"zero\"\n   | 1 -> \"one\"\n   | 2 -> \"two\"\n   | _ -> \"many\"\n</code></pre>\n\nIn this case, the pattern matching is done on the last function\nargument, so this function can be rewritten in a shorter form:\n\n<pre><code>let string_of_int = function\n    | 0 -> \"zero\"\n    | 1 -> \"one\"\n    | 2 -> \"two\"\n    | _ -> \"many\"\n</code></pre>\n\n</p>\n\n", [
		], (
# 0 "../ocaml-lessons/lesson4/step1/step.ml"
fun input output ->
  find_in  "string_of_int : int -> string =" output

		));
		(2, "Pattern-matching on chars", "<h3>Pattern-matching on chars</h3>\n\n<p>Pattern-matching on characters is also possible, with a special\n  syntax to denote character ranges:\n\n<pre><code>let is_capital = function\n  | 'a' .. 'z' -> false\n  | 'A' .. 'Z' -> true\n  | _          -> failwith \"Not a valid letter\"\n</code></pre>\n\nIt is possible to give a name the value which is matched using the\nkeyword <em>as</em>:\n\n<pre><code>let capitalize = function\n  | 'a' .. 'z' as letter -> Char.uppercase letter\n  | 'A' .. 'Z' as letter -> letter\n  | _                    -> failwith \"Not a valid letter\"\n</code></pre>\n\n</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson4/step2/step.ml"
fun input output ->
  find_in  "val capitalize : char -> char =" output

		));
		(3, "Pattern-matching on tuples", "<h3>Pattern-matching on tuples</h3>\n\n<p>Pattern-matching is also possible on tuples:\n\n<pre><code>let fit str len = match (str,len) with\n  | (\"foo\", 51) -> true\n  | (\"bar\", 51) -> true\n  | (_    , 42) -> false\n  | _           -> (String.length str) = len\n</code></pre>\n\nIn case multiple patterns return a similar value, it is possible to\nomit the first occurrences of the value:\n\n<pre><code>let fit str len = match (str,len) with\n  | (\"foo\", 51)\n  | (\"bar\", 51) -> true\n  | (_    , 42) -> false\n  | _           -> (String.length str) = len\n</code></pre>\n\nFurthermore, it is possible to guard each of the pattern with some\ncondition which will be computed when the pattern is evaluated, using\nthe keyword <em>when</em>:\n\n<pre><code>let fit str len = match (str,len) with\n  | (_,51) when (str=\"foo\" || str=\"bar\") -> true\n  | (_, x) when x=42 -> false\n  | _ -> (String.length str) = len\n</code></pre>\n\n</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson4/step3/step.ml"
fun input output ->
  find_in "  | (_, x) when x=42 -> false" input &&
  find_in "val fit : string -> int -> bool =" output

		));
		(4, "Pattern-matching on lists", "<h3>Pattern-matching on lists</h3>\n\n<p>\n However, the real power of pattern-matching appears when we start\n using more structured values, when we start needing giving a name to\n matched patterns. For instance, a list is either the empty\n list <em>[]</em> or a head and a tail, denoted by the\n pattern <em>h::t</em> where <em>h</em> and <em>t</em> are fresh\n variables bound to the matched patterns:\n\n<pre><code>let head = function\n  | []   -> failwith \"empty list\"\n  | h::t -> h\n</code></pre>\n\nMore complex patterns can be written, for instance to look at the head\nof the tail:\n\n<pre><code>let second_element = function\n  | []      -> failwith \"the list is empty\"\n  | [_]     -> failwith \"the list contains only one element\"\n  | _::e::_ -> e\n</code></pre>\n\nOr to look deeper into the matched list:\n\n<pre><code>let head_head = function\n  | []        -> failwith \"the list is empty\"\n  | []::_     -> failwith \"the head is the empty list\"\n  | (h::_)::_ -> h\n</code></pre>\n</p>\n\n", [
		], (
# 0 "../ocaml-lessons/lesson4/step4/step.ml"
fun input output ->
  find_in  "val head_head : 'a list list -> 'a =" output

		));
		(5, "Pattern-matching on arrays", "<h3>Pattern-matching on arrays</h3>\n\n<p>You can also pattern match on arrays:\n\n<pre><code>let has_size_two = function\n  | [| _; _ |] -> true\n  | _          -> false\n</code></pre>\n\nAnd you can mix all the kind of values:\n\n<pre><code>let f = function\n  | []                 -> failwith \"empty list\"\n  | [| _; (_, x) |]::_ -> x\n  | _                  -> failwith \"the first array should be of size two\"\n</code></pre>\n</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson4/step5/step.ml"
fun input output ->
  find_in  "val f : ('a * 'b) array list -> 'b =" output

		));
		(6, "Exhaustiveness", "<h3>Exhaustiveness</h3>\n\n<p>One of the benefit of pattern-matching is the exhaustiveness check\n  done by the compiler statically. Indeed, the OCaml compiler can\n  verify that all the cases are handled. For instance, when\n  pattern-matching on a list, the compiler will warn\n  the user if she forgets to handle the empty list case:\n\n<pre><code>let head_partial = function\n  | h::_ -> h\n</code></pre>\n\nMoreover, the compiler will also warm the user when a case is handled\nmultiple times or when a case is unused:\n\n<pre><code>let head = function\n  | []   -> failwith \"empty list\"\n  | h::_ -> h\n  | [h]  -> h\n</code></pre>\n\n</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson4/step6/step.ml"
fun input output ->
  find_in "val head : 'a list -> 'a =" output

		));
	]);
	(5, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson5/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(6, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson6/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(7, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson7/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(8, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson8/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(9, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson9/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(10, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson10/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(11, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson11/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(12, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson12/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(13, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson13/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(14, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson14/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(15, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson15/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(16, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson16/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(17, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson17/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(18, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson18/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(19, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../ocaml-lessons/lesson19/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(20, "New Features in OCaml 3.12", "<h3>New Features in OCaml 3.12</h3>\n", [
	], [
		(1, "Local opens", "<h3>Local opens</h3>\n\n<p>Since OCaml 3.12, you can locally open a module within an\nexpression, using the <code>let open</code> syntax. It can be very\nuseful when accessing multiple values of a modules, without exposing\nthem elsewhere:</p>\n\n<code>let open List in\nmap fst (map (fun x -&gt; (x,1)) [1;2;3;4])</code>\n\n\n", [
		], (
# 0 "../ocaml-lessons/lesson20/step1/step.ml"

fun input output ->  find_in "let open " input



		));
		(2, "Local opens", "<h3>Local opens</h3>\n\n<p>You can also open a module for an expression within parenthesis:</p>\n\n<p><code>let int_6L = Int64.(add 1L (sub 7L 2L))</code></p>\n\n\n\n", [
		], (
# 0 "../ocaml-lessons/lesson20/step2/step.ml"
fun input output -> find_in  ".(" input



		));
		(3, "Abbreviated Record Notation", "<h3>Abbreviated Record Notation</h3>\n\n<p>A new notation has been introduced to switch between record labels\nand local variables.</p>\n\n<p>If you have defined a record for vectors like:</p>\n\n<p><code>type vect = { x : float; y : float; }</code></p>\n\n<br/>\n\n<p>You can easily bind its labels to canonical variables in a pattern\nmatching: </p>\n\n<p><code>let norm { x; y } = sqrt (x *. x +. y *. y)</code></p>\n\n<br/>\n\n<p>You can also create new records using the same notation:</p>\n\n<p><code>let vect x y = { x ; y }</code></p>\n\n\n\n", [
		], (
# 0 "../ocaml-lessons/lesson20/step3/step.ml"
fun input output -> find_in "val vect : " output



		));
		(4, "Record Labels Exhaustiveness", "<h3>Record Labels Exhaustiveness</h3>\n\n<p>You can now verify the exhaustiveness of pattern-matchings on\nrecords, when the <code>R</code>(or <code>9</code>) warning is activated.</p>\n\n<p>Let's activate this warning with the default ones:</p>\n<p><code>#warnings \"+a-4-6-7-27..29\"</code></p>\n<br />\n\n<p>We can now implement a function that does not use all the labels\nand see what happens:<p>\n\n<p><code>let abs { x } = x</code></p>\n<br />\n\n<p>To avoid the warning, we must tell the compiler that we are aware that\nsome labels are missing:</p>\n\n<p><code>let abs { x; _ } = x</code></p>\n\n\n", [
		], (
# 0 "../ocaml-lessons/lesson20/step4/step.ml"
fun input output ->
  find_in "val abs : vect -> " output && find_in "_" input



		));
		(5, "Explicit Polymorphic Type Annotations", "<h3>Explicit Polymorphic Type Annotations</h3>\n\n<p>OCaml 3.12 introduces a new syntax to require that a type be\npolymorphic.</p>\n\n<p>Let's start with what was there before. Many people thought that\nthey could already force a polymorphic type on a function:<p>\n\n<p><code>let f : 'a -> 'a = function x -> x + 1</code></p>\n<br />\n\n<p>Although you might have thought you were forcing a polymorphic type\non the function, you were only enforcing a constraint of equality\nbetween the argument type and the result type.</p>\n\n<p>With explicit polymorphism, you can force the polymorphism (and get\nan error, of course):<p>\n\n<p><code>let f : 'a.'a -> 'a = function x -> x + 1</code></p>\n<br />\n\n<p>This notation can also be used to define really polymorphic\nrecursive methods. </p>\n\n<p>Let's define a new tree type:</p>\n\n<p><code>type 'a t = Leaf of 'a | Node of ('a * 'a) t</code></p>\n<br />\n\n<p>If we try to compute the depth of that tree, OCaml will complain: <p>\n\n<p><code>let rec depth = function Leaf _ -> 1 | Node x -> 1 + depth x</code></p>\n<br />\n\n<p>Indeed, depth is a recursive function, and the typer does not allow\nto use it will two different types of arguments. But now, with\nexplicit polymorphism, you can tell the typer that it's ok to do so, since the function is polymorphic:</p>\n\n<p><code>let rec depth : 'a. 'a t -> _ = function Leaf _ -> 1 | Node x -> 1 + depth x</code></p>\n\n\n", [
		], (
# 0 "../ocaml-lessons/lesson20/step5/step.ml"

fun input output -> find_in "val depth : 'a t -> int" output



		));
	]);
];;
