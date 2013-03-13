open Utils

let _ =
  let title = get_element_by_id "main-title" in
  let v = try
            int_of_string (List.assoc "counter" (Cookie.get_cookie () ))
    with Not_found -> 0 in
  
  let v = v + 1 in
  Cookie.set_cookie "counter" (string_of_int v);
  title##innerHTML <- _s (
    Printf.sprintf "This is your %s time in TryOCaml"
      (match v with
          1 -> "first"
        | 2 -> "second"
        | 3 -> "third"
        | _ -> string_of_int v ^ "th"))
