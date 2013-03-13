# Overview

TryLogic is the easiest way to learn Formal Logic.

A funny way to learn Logic. It is available here:

http://lolita.dimap.ufrn.br/trylogic


TryLogic is based on ProofWeb (http://prover.cs.ru.nl/ ) and the TryOCaml (http://try.ocamlpro.com/) 
developed with (http://ocsigen.org/js_of_ocaml/files/toplevel/index.html) and built with
js_of_ocaml (see http://ocsigen.org/js_of_ocaml/).

# Requirements

  * Findlib
  * Lwt (version 2.3.0** at least, see http://ocsigen.org/lwt/)

# Try it

    $ make

Then, you will need to install the ProofWeb, as descrived here http://prover.cs.ru.nl/install.php and copy the 'pub/' directory to the CHROOT diretory of the ProofWeb.

Finally use the Firefox to lauch the TryLogic.

# Contribute lessons/steps/fixes

Lessons are in the "lessons/" top directory.

Each lesson is a sub-directory "lessonN", where N is the lesson
number, and contains a file "lesson.html", with a title in a &lt;h3&gt; tag
on the first line, and a set of steps. Each step is a sub-directory
"stepM" of "lessons/lessonN", where M is the step number in the
lesson.

Each step is composed of two files:
- "step.html": the text of the step. The first line MUST contain the step title,
 in a &lt;h3&gt; tag. Code that should be copied in the terminal should be in
 &lt;code&gt; tags.
- "step.ml": the function testing if the step has been completed. It takes
 the user input (a string) and the compiler output (a string) as arguments,
 and returns a boolean, true if the user has succeeded, false otherwise.
 "step.ml" can directly use functions defined in "lessons/goodies.ml"
 (that is included, so NEVER use "open Goodies" or "Goodies.something),
 in particular the "find_in" function.

To recompile when you have done a modification:

    $ make update-lessons

Failure to comply to the lesson/step specification will make the
tryocaml/tutorial/make_lessons command fail.

If you want to debug at some point, you can type 
   debug true 
in the terminal to see what the input and output strings are.

Once everything works, send a "pull request" via Github, or send us a
patch. You can also come on #ocamlpro IRC channel to discuss with us.

# Online

http://try.ocamlpro.com/

# License

[GNU General Public License] (https://github.com/OCamlPro/tryocaml/blob/master/tryocaml/LICENSE.GPL)
