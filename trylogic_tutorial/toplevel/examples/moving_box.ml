open Utils

let canvas = Dom_html.createCanvas doc
let body = get_element_by_id "main-title"
let context = canvas##getContext (Dom_html._2d_)

let x = ref 10.
let y = ref 60.

let redraw _ =
  context##clearRect (!x, !y, 20., 20. );
  x := if !x > 400. then 0. else !x +. 2.;
  y := if !y > 150. then 0. else !y +. 1.;
  context##fillStyle <- Js.string "red";
  context##fillRect (!x,!y, 20., 20.)
    
let _ =
  Dom.appendChild body canvas;
  let _ = window##setInterval (_f redraw, 2.5) in
  ()





