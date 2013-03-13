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
	(1, "A moving box", "<h3>A moving box</h3>\n", [
	], [
		(1, "A moving box", "<h3>A moving box</h3>\n\n<pre><code>\nopen Utils\n\nlet canvas = Dom_html.createCanvas doc\nlet body = get_element_by_id \"main-title\"\nlet context = canvas##getContext (Dom_html._2d_)\n\nlet x = ref 10.\nlet y = ref 60.\n\nlet redraw _ =\n  context##clearRect (!x, !y, 20., 20. );\n  x := if !x > 400. then 0. else !x +. 2.;\n  y := if !y > 150. then 0. else !y +. 1.;\n  context##fillStyle <- Js.string \"red\";\n  context##fillRect (!x,!y, 20., 20.)\n\nlet _ =\n  Dom.appendChild body canvas;\n  let _ = window##setInterval (_f redraw, 2.5) in\n  ()\n</code></pre>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson1/step1/step.ml"
fun input output ->
  false


		));
		(2, "A moving box", "<h3>A moving box</h3>\n\n<pre><code>\nopen Utils\nlet canvas = Dom_html.createCanvas doc\nlet body = get_element_by_id \"main-title\"\nlet context = canvas##getContext (Dom_html._2d_)\n\nlet x = ref 10.\nlet y = ref 60.\n\nlet redraw _ =\n  context##clearRect (!x, !y, 20., 20. );\n  x := if !x > 400. then 0. else !x +. 2.;\n  y := if !y > 150. then 0. else !y +. 1.;\n  context##fillStyle <- Js.string \"red\";\n  context##fillRect (!x,!y, 20., 20.)\n\nlet _ =\n  Dom.appendChild body canvas;\n  let stop = setInterval redraw 2.5 in\n  Dom.appendChild body (Button.create \"Stop\" stop);\n  setTimeout stop 50000.\n</code></pre>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson1/step2/step.ml"
fun input output ->
  find_in  "- : string array =" output

		));
	]);
	(2, "A Taste of Imperative Programming", "<h3>A Taste of Imperative Programming</h3>\n", [
	], [
		(1, "Play with Cookies", "<h3>Play with Cookies</h3>\n\n<pre><code>\nopen Utils\n\nlet _ =\n  let title = get_element_by_id \"main-title\" in\n  let v = try\n            int_of_string (List.assoc \"counter\" (Cookie.get_cookie () ))\n    with Not_found -> 0 in\n\n  let v = v + 1 in\n  Cookie.set_cookie \"counter\" (string_of_int v);\n  title##innerHTML <- _s (\n    Printf.sprintf \"This is your %s time in TryOCaml\"\n      (match v with\n          1 -> \"first\"\n        | 2 -> \"second\"\n        | 3 -> \"third\"\n        | _ -> string_of_int v ^ \"th\"))\n</code></pre>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson2/step1/step.ml"
fun input output -> find_in "val y : int = 43" output

		));
	]);
	(3, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson3/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(4, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson4/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(5, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson5/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(6, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson6/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(7, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson7/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(8, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson8/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(9, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson9/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(10, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson10/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(11, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson11/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(12, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson12/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(13, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson13/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(14, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson14/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(15, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson15/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(16, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson16/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(17, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson17/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(18, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson18/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(19, "-", "<h3>-</h3>\n", [
	], [
		(1, "This lesson is not yet available", "<h3>This lesson is not yet available</h3>\n\n<p>Use <code>lessons ()</code> to get the list of all lessons.\nUse <code>back ()</code> to return to the previous step.</p>\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson19/step1/step.ml"
fun input output ->
  find_in  "- : char =" output

		));
	]);
	(20, "New Features in OCaml 3.12", "<h3>New Features in OCaml 3.12</h3>\n", [
	], [
		(1, "Local opens", "<h3>Local opens</h3>\n\n<p>Since OCaml 3.12, you can locally open a module within an\nexpression, using the <code>let open</code> syntax. It can be very\nuseful when accessing multiple values of a modules, without exposing\nthem elsewhere:</p>\n\n<code>let open List in\nmap fst (map (fun x -&gt; (x,1)) [1;2;3;4])</code>\n\n\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson20/step1/step.ml"

fun input output ->  find_in "let open " input



		));
		(2, "Local opens", "<h3>Local opens</h3>\n\n<p>You can also open a module for an expression within parenthesis:</p>\n\n<p><code>let int_6L = Int64.(add 1L (sub 7L 2L))</code></p>\n\n\n\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson20/step2/step.ml"
fun input output -> find_in  ".(" input



		));
		(3, "Abbreviated Record Notation", "<h3>Abbreviated Record Notation</h3>\n\n<p>A new notation has been introduced to switch between record labels\nand local variables.</p>\n\n<p>If you have defined a record for vectors like:</p>\n\n<p><code>type vect = { x : float; y : float; }</code></p>\n\n<br/>\n\n<p>You can easily bind its labels to canonical variables in a pattern\nmatching: </p>\n\n<p><code>let norm { x; y } = sqrt (x *. x +. y *. y)</code></p>\n\n<br/>\n\n<p>You can also create new records using the same notation:</p>\n\n<p><code>let vect x y = { x ; y }</code></p>\n\n\n\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson20/step3/step.ml"
fun input output -> find_in "val vect : " output



		));
		(4, "Record Labels Exhaustiveness", "<h3>Record Labels Exhaustiveness</h3>\n\n<p>You can now verify the exhaustiveness of pattern-matchings on\nrecords, when the <code>R</code>(or <code>9</code>) warning is activated.</p>\n\n<p>Let's activate this warning with the default ones:</p>\n<p><code>#warnings \"+a-4-6-7-27..29\"</code></p>\n<br />\n\n<p>We can now implement a function that does not use all the labels\nand see what happens:<p>\n\n<p><code>let abs { x } = x</code></p>\n<br />\n\n<p>To avoid the warning, we must tell the compiler that we are aware that\nsome labels are missing:</p>\n\n<p><code>let abs { x; _ } = x</code></p>\n\n\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson20/step4/step.ml"
fun input output ->
  find_in "val abs : vect -> " output && find_in "_" input



		));
		(5, "Explicit Polymorphic Type Annotations", "<h3>Explicit Polymorphic Type Annotations</h3>\n\n<p>OCaml 3.12 introduces a new syntax to require that a type be\npolymorphic.</p>\n\n<p>Let's start with what was there before. Many people thought that\nthey could already force a polymorphic type on a function:<p>\n\n<p><code>let f : 'a -> 'a = function x -> x + 1</code></p>\n<br />\n\n<p>Although you might have thought you were forcing a polymorphic type\non the function, you were only enforcing a constraint of equality\nbetween the argument type and the result type.</p>\n\n<p>With explicit polymorphism, you can force the polymorphism (and get\nan error, of course):<p>\n\n<p><code>let f : 'a.'a -> 'a = function x -> x + 1</code></p>\n<br />\n\n<p>This notation can also be used to define really polymorphic\nrecursive methods. </p>\n\n<p>Let's define a new tree type:</p>\n\n<p><code>type 'a t = Leaf of 'a | Node of ('a * 'a) t</code></p>\n<br />\n\n<p>If we try to compute the depth of that tree, OCaml will complain: <p>\n\n<p><code>let rec depth = function Leaf _ -> 1 | Node x -> 1 + depth x</code></p>\n<br />\n\n<p>Indeed, depth is a recursive function, and the typer does not allow\nto use it will two different types of arguments. But now, with\nexplicit polymorphism, you can tell the typer that it's ok to do so, since the function is polymorphic:</p>\n\n<p><code>let rec depth : 'a. 'a t -> _ = function Leaf _ -> 1 | Node x -> 1 + depth x</code></p>\n\n\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson20/step5/step.ml"

fun input output -> find_in "val depth : 'a t -> int" output



		));
	]);
	(40, "Regression Tests for TryOCaml", "<h3>Regression Tests for TryOCaml</h3>\n", [
	], [
		(1, "Regressions Tests", "<h3>Regressions Tests</h3>\n\n<p><code>Printf.printf \"%d\" 4</code></p>\n\n<p><code>let h = Hashtbl.create 13;;\n    Hashtbl.add h \"v\" [1];;\n    h</code></p>\n\n<p><code>\nlet s = Stack.create ();;\nStack.push 3 s;;\ns\n</code></p>\n\n\n<p><code>\nlet x = lazy (4 * 4);;\nx;;\nLazy.force x;;\nx\n</code></p>\n\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson40/step1/step.ml"

fun input output ->  find_in "xxxx" input



		));
		(10, "Regressions Tests", "<h3>Regressions Tests</h3>\n\n<p><code>let t1 = Big.( 1000 )</code></p>\n<p><code>let t2 = Big.( 500 )</code></p>\n<p><code>Big.( t1 + t2)</code></p>\n<p><code>Big.( t1 - t2)</code></p>\n<p><code>Big.( t2 - t1)</code></p>\n\n", [
		], (
# 0 "../js_of_ocaml-lessons/lesson40/step10/step.ml"

fun input output ->  find_in "xxxx" input



		));
	]);
];;
