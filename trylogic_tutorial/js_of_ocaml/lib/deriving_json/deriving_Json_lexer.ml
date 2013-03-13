# 29 "deriving_json/deriving_Json_lexer.mll"
 
  module Lexing =
    (*
      We override Lexing.engine in order to avoid creating a new position
      record each time a rule is matched.
      This reduces total parsing time by about 31%.
    *)
  struct
    include Lexing

    external c_engine : lex_tables -> int -> lexbuf -> int = "caml_lex_engine"

    let engine tbl state buf =
      let result = c_engine tbl state buf in
      (*
      if result >= 0 then begin
	buf.lex_start_p <- buf.lex_curr_p;
	buf.lex_curr_p <- {buf.lex_curr_p
			   with pos_cnum = buf.lex_abs_pos + buf.lex_curr_pos};
      end;
      *)
      result
  end

  open Printf
  open Lexing

  type lexbuf = {
    buf : Buffer.t;
      (* Buffer used to accumulate substrings *)

    mutable lnum : int;
      (* Current line number (starting from 1) *)

    mutable bol : int;
      (* Absolute position of the first character of the current line
	 (starting from 0) *)

    lexbuf : Lexing.lexbuf;

  }

  let dec c =
    Char.code c - 48

  let hex c =
    match c with
	'0'..'9' -> int_of_char c - int_of_char '0'
      | 'a'..'f' -> int_of_char c - int_of_char 'a' + 10
      | 'A'..'F' -> int_of_char c - int_of_char 'A' + 10
      | _ -> assert false

  let json_error msg = failwith ("Deriving.Json: " ^ msg)

  let custom_error descr v lexbuf =
    let offs = lexbuf.lex_abs_pos in
    let bol = v.bol in
    let pos1 = offs + lexbuf.lex_start_pos - bol in
    let pos2 = max pos1 (offs + lexbuf.lex_curr_pos - bol - 1) in
    let bytes =
      if pos1 = pos2 then
	sprintf "byte %i" (pos1+1)
      else
	sprintf "bytes %i-%i" (pos1+1) (pos2+1)
    in
    let msg = sprintf "Line %i, %s:\n%s" v.lnum bytes descr in
    json_error msg


  let lexer_error descr v lexbuf =
    custom_error
      (sprintf "%s '%s'" descr (Lexing.lexeme lexbuf))
      v lexbuf

  let min10 = min_int / 10 - (if min_int mod 10 = 0 then 0 else 1)
  let max10 = max_int / 10 + (if max_int mod 10 = 0 then 0 else 1)

  exception Int_overflow

  let extract_positive_int lexbuf =
    let start = lexbuf.lex_start_pos in
    let stop = lexbuf.lex_curr_pos in
    let s = lexbuf.lex_buffer in
    let n = ref 0 in
    for i = start to stop - 1 do
      if !n >= max10 then
	raise Int_overflow
      else
	n := 10 * !n + dec s.[i]
    done;
    if !n < 0 then
      raise Int_overflow
    else
      !n

  let make_positive_int v lexbuf =
      try `Int (extract_positive_int lexbuf)
      with Int_overflow ->
        lexer_error "Int overflow" v lexbuf

  let extract_negative_int lexbuf =
    let start = lexbuf.lex_start_pos + 1 in
    let stop = lexbuf.lex_curr_pos in
    let s = lexbuf.lex_buffer in
    let n = ref 0 in
    for i = start to stop - 1 do
      if !n <= min10 then
	raise Int_overflow
      else
	n := 10 * !n - dec s.[i]
    done;
    if !n > 0 then
      raise Int_overflow
    else
      !n

  let make_negative_int v lexbuf =
      try `Int (extract_negative_int lexbuf)
      with Int_overflow ->
        lexer_error "Int overflow" v lexbuf

  let newline v lexbuf =
    v.lnum <- v.lnum + 1;
    v.bol <- lexbuf.lex_abs_pos + lexbuf.lex_curr_pos

  type variant_kind = [ `Edgy_bracket | `Square_bracket | `Double_quote ]
  type tuple_kind = [ `Parenthesis | `Square_bracket ]

# 131 "deriving_json/deriving_Json_lexer.ml"
let __ocaml_lex_tables = {
  Lexing.lex_base = 
   "\000\000\252\255\253\255\254\255\255\255\001\000\254\255\255\255\
    \002\000\247\255\248\255\008\000\250\255\251\255\252\255\253\255\
    \254\255\255\255\072\000\095\000\133\000\249\255\003\000\253\255\
    \254\255\255\255\004\000\252\255\253\255\254\255\255\255\008\000\
    \252\255\253\255\254\255\004\000\255\255\005\000\255\255\006\000\
    \000\000\253\255\024\000\254\255\007\000\255\255\020\000\253\255\
    \254\255\000\000\003\000\005\000\255\255\051\000\252\255\253\255\
    \001\000\000\000\014\000\000\000\255\255\007\000\017\000\001\000\
    \254\255\034\000\252\255\253\255\156\000\255\255\166\000\254\255\
    \188\000\198\000\253\255\254\255\255\255\217\000\230\000\253\255\
    \254\255\255\255\243\000\004\001\017\001\253\255\254\255\255\255\
    \027\001\037\001\050\001\250\255\251\255\034\000\062\001\084\001\
    \023\000\002\000\003\000\255\255\032\000\031\000\044\000\050\000\
    \040\000\036\000\254\255\048\000\057\000\061\000\058\000\070\000\
    \060\000\056\000\253\255\099\001\116\001\126\001\151\001\136\001\
    \161\001\183\001\193\001\006\000\253\255\254\255\255\255\197\000\
    \253\255\254\255\255\255\226\000\253\255\254\255\255\255\203\001\
    \252\255\253\255\254\255\255\255\213\001\226\001\252\255\253\255\
    \254\255\255\255\236\001";
  Lexing.lex_backtrk = 
   "\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\007\000\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\003\000\255\255\001\000\255\255\004\000\
    \003\000\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\001\000\255\255\255\255\255\255\255\255\255\255\255\255\
    \002\000\002\000\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\002\000\255\255\000\000\255\255\
    \001\000\255\255\255\255\255\255\255\255\000\000\255\255\255\255\
    \255\255\255\255\000\000\001\000\255\255\255\255\255\255\255\255\
    \000\000\001\000\255\255\255\255\255\255\003\000\003\000\004\000\
    \004\000\004\000\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\003\000\255\255\003\000\
    \255\255\003\000\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\000\000\255\255\255\255\255\255\
    \255\255\255\255\000\000";
  Lexing.lex_default = 
   "\002\000\000\000\000\000\000\000\000\000\007\000\000\000\000\000\
    \010\000\000\000\000\000\255\255\000\000\000\000\000\000\000\000\
    \000\000\000\000\255\255\255\255\255\255\000\000\024\000\000\000\
    \000\000\000\000\028\000\000\000\000\000\000\000\000\000\032\000\
    \000\000\000\000\000\000\255\255\000\000\255\255\000\000\255\255\
    \255\255\000\000\255\255\000\000\044\000\000\000\048\000\000\000\
    \000\000\255\255\255\255\255\255\000\000\055\000\000\000\000\000\
    \255\255\255\255\255\255\255\255\000\000\255\255\255\255\255\255\
    \000\000\067\000\000\000\000\000\255\255\000\000\255\255\000\000\
    \255\255\075\000\000\000\000\000\000\000\255\255\080\000\000\000\
    \000\000\000\000\255\255\255\255\086\000\000\000\000\000\000\000\
    \255\255\255\255\092\000\000\000\000\000\255\255\255\255\255\255\
    \255\255\255\255\255\255\000\000\255\255\255\255\255\255\255\255\
    \255\255\255\255\000\000\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\000\000\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\125\000\000\000\000\000\000\000\129\000\
    \000\000\000\000\000\000\133\000\000\000\000\000\000\000\137\000\
    \000\000\000\000\000\000\000\000\255\255\143\000\000\000\000\000\
    \000\000\000\000\255\255";
  Lexing.lex_trans = 
   "\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\040\000\000\000\000\000\000\000\040\000\000\000\040\000\
    \041\000\045\000\033\000\040\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \040\000\000\000\004\000\000\000\017\000\000\000\040\000\000\000\
    \126\000\000\000\000\000\000\000\000\000\000\000\000\000\025\000\
    \030\000\017\000\035\000\036\000\000\000\042\000\000\000\000\000\
    \018\000\018\000\018\000\018\000\018\000\018\000\018\000\018\000\
    \018\000\018\000\043\000\000\000\000\000\000\000\000\000\044\000\
    \000\000\018\000\018\000\018\000\018\000\018\000\018\000\068\000\
    \116\000\099\000\069\000\070\000\070\000\070\000\070\000\070\000\
    \070\000\070\000\070\000\070\000\003\000\000\000\017\000\000\000\
    \000\000\029\000\061\000\098\000\016\000\060\000\064\000\115\000\
    \015\000\018\000\018\000\018\000\018\000\018\000\018\000\051\000\
    \014\000\052\000\058\000\062\000\013\000\050\000\012\000\011\000\
    \019\000\019\000\019\000\019\000\019\000\019\000\019\000\019\000\
    \019\000\019\000\049\000\059\000\063\000\100\000\101\000\115\000\
    \102\000\019\000\019\000\019\000\019\000\019\000\019\000\020\000\
    \020\000\020\000\020\000\020\000\020\000\020\000\020\000\020\000\
    \020\000\056\000\103\000\104\000\105\000\106\000\108\000\109\000\
    \020\000\020\000\020\000\020\000\020\000\020\000\110\000\057\000\
    \111\000\019\000\019\000\019\000\019\000\019\000\019\000\112\000\
    \113\000\114\000\000\000\000\000\000\000\021\000\021\000\021\000\
    \021\000\021\000\021\000\021\000\021\000\021\000\021\000\000\000\
    \020\000\020\000\020\000\020\000\020\000\020\000\021\000\021\000\
    \021\000\021\000\021\000\021\000\071\000\072\000\072\000\072\000\
    \072\000\072\000\072\000\072\000\072\000\072\000\070\000\070\000\
    \070\000\070\000\070\000\070\000\070\000\070\000\070\000\070\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\021\000\021\000\
    \021\000\021\000\021\000\021\000\072\000\072\000\072\000\072\000\
    \072\000\072\000\072\000\072\000\072\000\072\000\076\000\077\000\
    \077\000\077\000\077\000\077\000\077\000\077\000\077\000\077\000\
    \001\000\006\000\009\000\023\000\027\000\038\000\124\000\045\000\
    \034\000\077\000\077\000\077\000\077\000\077\000\077\000\077\000\
    \077\000\077\000\077\000\083\000\047\000\000\000\081\000\082\000\
    \082\000\082\000\082\000\082\000\082\000\082\000\082\000\082\000\
    \130\000\000\000\066\000\082\000\082\000\082\000\082\000\082\000\
    \082\000\082\000\082\000\082\000\082\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\054\000\081\000\082\000\082\000\082\000\
    \082\000\082\000\082\000\082\000\082\000\082\000\089\000\134\000\
    \000\000\087\000\088\000\088\000\088\000\088\000\088\000\088\000\
    \088\000\088\000\088\000\088\000\088\000\088\000\088\000\088\000\
    \088\000\088\000\088\000\088\000\088\000\087\000\088\000\088\000\
    \088\000\088\000\088\000\088\000\088\000\088\000\088\000\095\000\
    \000\000\000\000\093\000\094\000\094\000\094\000\094\000\094\000\
    \094\000\094\000\094\000\094\000\116\000\000\000\094\000\094\000\
    \094\000\094\000\094\000\094\000\094\000\094\000\094\000\094\000\
    \000\000\000\000\000\000\096\000\000\000\000\000\000\000\000\000\
    \097\000\000\000\000\000\115\000\093\000\094\000\094\000\094\000\
    \094\000\094\000\094\000\094\000\094\000\094\000\122\000\000\000\
    \122\000\000\000\000\000\121\000\121\000\121\000\121\000\121\000\
    \121\000\121\000\121\000\121\000\121\000\107\000\000\000\000\000\
    \000\000\000\000\000\000\115\000\117\000\117\000\117\000\117\000\
    \117\000\117\000\117\000\117\000\117\000\117\000\117\000\117\000\
    \117\000\117\000\117\000\117\000\117\000\117\000\117\000\117\000\
    \119\000\119\000\119\000\119\000\119\000\119\000\119\000\119\000\
    \119\000\119\000\120\000\118\000\120\000\128\000\074\000\119\000\
    \119\000\119\000\119\000\119\000\119\000\119\000\119\000\119\000\
    \119\000\119\000\119\000\119\000\119\000\119\000\119\000\119\000\
    \119\000\119\000\119\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\132\000\118\000\000\000\000\000\079\000\121\000\
    \121\000\121\000\121\000\121\000\121\000\121\000\121\000\121\000\
    \121\000\121\000\121\000\121\000\121\000\121\000\121\000\121\000\
    \121\000\121\000\121\000\139\000\140\000\140\000\140\000\140\000\
    \140\000\140\000\140\000\140\000\140\000\140\000\140\000\140\000\
    \140\000\140\000\140\000\140\000\140\000\140\000\140\000\000\000\
    \000\000\085\000\145\000\146\000\146\000\146\000\146\000\146\000\
    \146\000\146\000\146\000\146\000\146\000\146\000\146\000\146\000\
    \146\000\146\000\146\000\146\000\146\000\146\000\138\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\091\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\144\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\136\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\142\000\000\000\000\000\000\000\000\000\000\000\
    \000\000\000\000\000\000\000\000\000\000";
  Lexing.lex_check = 
   "\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\040\000\255\255\255\255\255\255\040\000\255\255\039\000\
    \039\000\044\000\031\000\039\000\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \040\000\255\255\000\000\255\255\008\000\255\255\039\000\255\255\
    \123\000\255\255\255\255\255\255\255\255\255\255\255\255\022\000\
    \026\000\008\000\031\000\035\000\255\255\039\000\255\255\255\255\
    \011\000\011\000\011\000\011\000\011\000\011\000\011\000\011\000\
    \011\000\011\000\042\000\255\255\255\255\255\255\255\255\042\000\
    \255\255\011\000\011\000\011\000\011\000\011\000\011\000\065\000\
    \093\000\098\000\065\000\065\000\065\000\065\000\065\000\065\000\
    \065\000\065\000\065\000\065\000\000\000\255\255\008\000\255\255\
    \255\255\026\000\056\000\097\000\008\000\059\000\063\000\093\000\
    \008\000\011\000\011\000\011\000\011\000\011\000\011\000\050\000\
    \008\000\051\000\057\000\061\000\008\000\049\000\008\000\008\000\
    \018\000\018\000\018\000\018\000\018\000\018\000\018\000\018\000\
    \018\000\018\000\046\000\058\000\062\000\096\000\100\000\093\000\
    \101\000\018\000\018\000\018\000\018\000\018\000\018\000\019\000\
    \019\000\019\000\019\000\019\000\019\000\019\000\019\000\019\000\
    \019\000\053\000\102\000\103\000\104\000\105\000\107\000\108\000\
    \019\000\019\000\019\000\019\000\019\000\019\000\109\000\053\000\
    \110\000\018\000\018\000\018\000\018\000\018\000\018\000\111\000\
    \112\000\113\000\255\255\255\255\255\255\020\000\020\000\020\000\
    \020\000\020\000\020\000\020\000\020\000\020\000\020\000\255\255\
    \019\000\019\000\019\000\019\000\019\000\019\000\020\000\020\000\
    \020\000\020\000\020\000\020\000\068\000\068\000\068\000\068\000\
    \068\000\068\000\068\000\068\000\068\000\068\000\070\000\070\000\
    \070\000\070\000\070\000\070\000\070\000\070\000\070\000\070\000\
    \255\255\255\255\255\255\255\255\255\255\255\255\020\000\020\000\
    \020\000\020\000\020\000\020\000\072\000\072\000\072\000\072\000\
    \072\000\072\000\072\000\072\000\072\000\072\000\073\000\073\000\
    \073\000\073\000\073\000\073\000\073\000\073\000\073\000\073\000\
    \000\000\005\000\008\000\022\000\026\000\037\000\123\000\044\000\
    \031\000\077\000\077\000\077\000\077\000\077\000\077\000\077\000\
    \077\000\077\000\077\000\078\000\046\000\255\255\078\000\078\000\
    \078\000\078\000\078\000\078\000\078\000\078\000\078\000\078\000\
    \127\000\255\255\065\000\082\000\082\000\082\000\082\000\082\000\
    \082\000\082\000\082\000\082\000\082\000\255\255\255\255\255\255\
    \255\255\255\255\255\255\053\000\083\000\083\000\083\000\083\000\
    \083\000\083\000\083\000\083\000\083\000\083\000\084\000\131\000\
    \255\255\084\000\084\000\084\000\084\000\084\000\084\000\084\000\
    \084\000\084\000\084\000\088\000\088\000\088\000\088\000\088\000\
    \088\000\088\000\088\000\088\000\088\000\089\000\089\000\089\000\
    \089\000\089\000\089\000\089\000\089\000\089\000\089\000\090\000\
    \255\255\255\255\090\000\090\000\090\000\090\000\090\000\090\000\
    \090\000\090\000\090\000\090\000\094\000\255\255\094\000\094\000\
    \094\000\094\000\094\000\094\000\094\000\094\000\094\000\094\000\
    \255\255\255\255\255\255\090\000\255\255\255\255\255\255\255\255\
    \090\000\255\255\255\255\094\000\095\000\095\000\095\000\095\000\
    \095\000\095\000\095\000\095\000\095\000\095\000\115\000\255\255\
    \115\000\255\255\255\255\115\000\115\000\115\000\115\000\115\000\
    \115\000\115\000\115\000\115\000\115\000\095\000\255\255\255\255\
    \255\255\255\255\255\255\094\000\116\000\116\000\116\000\116\000\
    \116\000\116\000\116\000\116\000\116\000\116\000\117\000\117\000\
    \117\000\117\000\117\000\117\000\117\000\117\000\117\000\117\000\
    \119\000\119\000\119\000\119\000\119\000\119\000\119\000\119\000\
    \119\000\119\000\118\000\117\000\118\000\127\000\073\000\118\000\
    \118\000\118\000\118\000\118\000\118\000\118\000\118\000\118\000\
    \118\000\120\000\120\000\120\000\120\000\120\000\120\000\120\000\
    \120\000\120\000\120\000\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\131\000\117\000\255\255\255\255\078\000\121\000\
    \121\000\121\000\121\000\121\000\121\000\121\000\121\000\121\000\
    \121\000\122\000\122\000\122\000\122\000\122\000\122\000\122\000\
    \122\000\122\000\122\000\135\000\135\000\135\000\135\000\135\000\
    \135\000\135\000\135\000\135\000\135\000\140\000\140\000\140\000\
    \140\000\140\000\140\000\140\000\140\000\140\000\140\000\255\255\
    \255\255\084\000\141\000\141\000\141\000\141\000\141\000\141\000\
    \141\000\141\000\141\000\141\000\146\000\146\000\146\000\146\000\
    \146\000\146\000\146\000\146\000\146\000\146\000\135\000\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\090\000\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\141\000\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\135\000\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\141\000\255\255\255\255\255\255\255\255\255\255\
    \255\255\255\255\255\255\255\255\255\255";
  Lexing.lex_base_code = 
   "";
  Lexing.lex_backtrk_code = 
   "";
  Lexing.lex_default_code = 
   "";
  Lexing.lex_trans_code = 
   "";
  Lexing.lex_check_code = 
   "";
  Lexing.lex_code = 
   "";
}

let rec finish_string v lexbuf =
    __ocaml_lex_finish_string_rec v lexbuf 0
and __ocaml_lex_finish_string_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 176 "deriving_json/deriving_Json_lexer.mll"
           ( Buffer.contents v.buf )
# 404 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 177 "deriving_json/deriving_Json_lexer.mll"
           ( finish_escaped_char v lexbuf;
	     finish_string v lexbuf )
# 410 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
let
# 179 "deriving_json/deriving_Json_lexer.mll"
         c
# 416 "deriving_json/deriving_Json_lexer.ml"
= Lexing.sub_lexeme_char lexbuf lexbuf.Lexing.lex_start_pos in
# 179 "deriving_json/deriving_Json_lexer.mll"
           ( if c < '\x80' then
               Buffer.add_char v.buf c
             else
               finish_utf8_encoded_byte v c lexbuf;
             finish_string v lexbuf )
# 424 "deriving_json/deriving_Json_lexer.ml"

  | 3 ->
# 184 "deriving_json/deriving_Json_lexer.mll"
           ( custom_error "Unexpected end of input" v lexbuf )
# 429 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_finish_string_rec v lexbuf __ocaml_lex_state

and finish_utf8_encoded_byte v c1 lexbuf =
    __ocaml_lex_finish_utf8_encoded_byte_rec v c1 lexbuf 5
and __ocaml_lex_finish_utf8_encoded_byte_rec v c1 lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
let
# 187 "deriving_json/deriving_Json_lexer.mll"
         c2
# 441 "deriving_json/deriving_Json_lexer.ml"
= Lexing.sub_lexeme_char lexbuf lexbuf.Lexing.lex_start_pos in
# 187 "deriving_json/deriving_Json_lexer.mll"
            ( (* Even if encoded in UTF-8, a byte could not be greater than 255 ! *)
              if '\xC2' <= c1 && c1 < '\xC4' && '\x80' <= c2 && c2 < '\xC0' then
                let c = ((Char.code c1 lsl 6) lor Char.code c2) land 0xFF in
                Buffer.add_char v.buf (Char.chr c)
              else
                custom_error "Unexpected byte in string" v lexbuf )
# 450 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 193 "deriving_json/deriving_Json_lexer.mll"
            ( custom_error "Unexpected end of input" v lexbuf )
# 455 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_finish_utf8_encoded_byte_rec v c1 lexbuf __ocaml_lex_state

and finish_escaped_char v lexbuf =
    __ocaml_lex_finish_escaped_char_rec v lexbuf 8
and __ocaml_lex_finish_escaped_char_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
let
# 198 "deriving_json/deriving_Json_lexer.mll"
           c
# 467 "deriving_json/deriving_Json_lexer.ml"
= Lexing.sub_lexeme_char lexbuf lexbuf.Lexing.lex_start_pos in
# 198 "deriving_json/deriving_Json_lexer.mll"
             ( Buffer.add_char v.buf c )
# 471 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 199 "deriving_json/deriving_Json_lexer.mll"
         ( Buffer.add_char v.buf '\b' )
# 476 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 200 "deriving_json/deriving_Json_lexer.mll"
         ( Buffer.add_char v.buf '\012' )
# 481 "deriving_json/deriving_Json_lexer.ml"

  | 3 ->
# 201 "deriving_json/deriving_Json_lexer.mll"
         ( Buffer.add_char v.buf '\n' )
# 486 "deriving_json/deriving_Json_lexer.ml"

  | 4 ->
# 202 "deriving_json/deriving_Json_lexer.mll"
         ( Buffer.add_char v.buf '\r' )
# 491 "deriving_json/deriving_Json_lexer.ml"

  | 5 ->
# 203 "deriving_json/deriving_Json_lexer.mll"
         ( Buffer.add_char v.buf '\t' )
# 496 "deriving_json/deriving_Json_lexer.ml"

  | 6 ->
let
# 204 "deriving_json/deriving_Json_lexer.mll"
                a
# 502 "deriving_json/deriving_Json_lexer.ml"
= Lexing.sub_lexeme_char lexbuf (lexbuf.Lexing.lex_start_pos + 1)
and
# 204 "deriving_json/deriving_Json_lexer.mll"
                           b
# 507 "deriving_json/deriving_Json_lexer.ml"
= Lexing.sub_lexeme_char lexbuf (lexbuf.Lexing.lex_start_pos + 2)
and
# 204 "deriving_json/deriving_Json_lexer.mll"
                                      c
# 512 "deriving_json/deriving_Json_lexer.ml"
= Lexing.sub_lexeme_char lexbuf (lexbuf.Lexing.lex_start_pos + 3)
and
# 204 "deriving_json/deriving_Json_lexer.mll"
                                                 d
# 517 "deriving_json/deriving_Json_lexer.ml"
= Lexing.sub_lexeme_char lexbuf (lexbuf.Lexing.lex_start_pos + 4) in
# 205 "deriving_json/deriving_Json_lexer.mll"
         ( (* Even if encoded in UTF-8, a byte could not be greater than 255 ! *)
            if hex a = 0 && hex b = 0 then
	     let c = (hex c lsl 4) lor hex d in
             Buffer.add_char v.buf (Char.chr c)
           else
	     custom_error "Unexpected byte in string" v lexbuf
	 )
# 527 "deriving_json/deriving_Json_lexer.ml"

  | 7 ->
# 212 "deriving_json/deriving_Json_lexer.mll"
         ( lexer_error "Invalid escape sequence" v lexbuf )
# 532 "deriving_json/deriving_Json_lexer.ml"

  | 8 ->
# 213 "deriving_json/deriving_Json_lexer.mll"
         ( custom_error "Unexpected end of input" v lexbuf )
# 537 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_finish_escaped_char_rec v lexbuf __ocaml_lex_state

and read_comma v lexbuf =
    __ocaml_lex_read_comma_rec v lexbuf 22
and __ocaml_lex_read_comma_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 216 "deriving_json/deriving_Json_lexer.mll"
          ( () )
# 548 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 217 "deriving_json/deriving_Json_lexer.mll"
          ( lexer_error "Expected ',' but found" v lexbuf )
# 553 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 218 "deriving_json/deriving_Json_lexer.mll"
          ( custom_error "Unexpected end of input" v lexbuf )
# 558 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_comma_rec v lexbuf __ocaml_lex_state

and read_comma_or_rbracket v lexbuf =
    __ocaml_lex_read_comma_or_rbracket_rec v lexbuf 26
and __ocaml_lex_read_comma_or_rbracket_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 221 "deriving_json/deriving_Json_lexer.mll"
          ( `Comma )
# 569 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 222 "deriving_json/deriving_Json_lexer.mll"
          ( `RBracket )
# 574 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 223 "deriving_json/deriving_Json_lexer.mll"
          ( lexer_error "Expected ',' or ']' but found" v lexbuf )
# 579 "deriving_json/deriving_Json_lexer.ml"

  | 3 ->
# 224 "deriving_json/deriving_Json_lexer.mll"
          ( custom_error "Unexpected end of input" v lexbuf )
# 584 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_comma_or_rbracket_rec v lexbuf __ocaml_lex_state

and finish_comment v lexbuf =
    __ocaml_lex_finish_comment_rec v lexbuf 31
and __ocaml_lex_finish_comment_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 227 "deriving_json/deriving_Json_lexer.mll"
         ( () )
# 595 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 228 "deriving_json/deriving_Json_lexer.mll"
         ( lexer_error "Unterminated comment" v lexbuf )
# 600 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 229 "deriving_json/deriving_Json_lexer.mll"
         ( newline v lexbuf; finish_comment v lexbuf )
# 605 "deriving_json/deriving_Json_lexer.ml"

  | 3 ->
# 230 "deriving_json/deriving_Json_lexer.mll"
         ( finish_comment v lexbuf )
# 610 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_finish_comment_rec v lexbuf __ocaml_lex_state

and read_eof lexbuf =
    __ocaml_lex_read_eof_rec lexbuf 37
and __ocaml_lex_read_eof_rec lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 235 "deriving_json/deriving_Json_lexer.mll"
              ( true )
# 621 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 236 "deriving_json/deriving_Json_lexer.mll"
              ( false )
# 626 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_eof_rec lexbuf __ocaml_lex_state

and read_space v lexbuf =
    __ocaml_lex_read_space_rec v lexbuf 39
and __ocaml_lex_read_space_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 239 "deriving_json/deriving_Json_lexer.mll"
                             ( newline v lexbuf; read_space v lexbuf )
# 637 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 240 "deriving_json/deriving_Json_lexer.mll"
                             ( finish_comment v lexbuf; read_space v lexbuf )
# 642 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 241 "deriving_json/deriving_Json_lexer.mll"
                             ( newline v lexbuf; read_space v lexbuf )
# 647 "deriving_json/deriving_Json_lexer.ml"

  | 3 ->
# 242 "deriving_json/deriving_Json_lexer.mll"
                             ( read_space v lexbuf )
# 652 "deriving_json/deriving_Json_lexer.ml"

  | 4 ->
# 243 "deriving_json/deriving_Json_lexer.mll"
                             ( () )
# 657 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_space_rec v lexbuf __ocaml_lex_state

and read_null v lexbuf =
    __ocaml_lex_read_null_rec v lexbuf 46
and __ocaml_lex_read_null_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 246 "deriving_json/deriving_Json_lexer.mll"
              ( () )
# 668 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 247 "deriving_json/deriving_Json_lexer.mll"
              ( lexer_error "Expected 'null' but found" v lexbuf )
# 673 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 248 "deriving_json/deriving_Json_lexer.mll"
              ( custom_error "Unexpected end of input" v lexbuf )
# 678 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_null_rec v lexbuf __ocaml_lex_state

and read_bool v lexbuf =
    __ocaml_lex_read_bool_rec v lexbuf 53
and __ocaml_lex_read_bool_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 251 "deriving_json/deriving_Json_lexer.mll"
              ( true )
# 689 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 252 "deriving_json/deriving_Json_lexer.mll"
              ( false )
# 694 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 253 "deriving_json/deriving_Json_lexer.mll"
              ( lexer_error "Expected 'true' or 'false' but found" v lexbuf )
# 699 "deriving_json/deriving_Json_lexer.ml"

  | 3 ->
# 254 "deriving_json/deriving_Json_lexer.mll"
              ( custom_error "Unexpected end of input" v lexbuf )
# 704 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_bool_rec v lexbuf __ocaml_lex_state

and read_int v lexbuf =
    __ocaml_lex_read_int_rec v lexbuf 65
and __ocaml_lex_read_int_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 257 "deriving_json/deriving_Json_lexer.mll"
                         ( try extract_positive_int lexbuf
			   with Int_overflow ->
			     lexer_error "Int overflow" v lexbuf )
# 717 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 260 "deriving_json/deriving_Json_lexer.mll"
                         ( try extract_negative_int lexbuf
			   with Int_overflow ->
			     lexer_error "Int overflow" v lexbuf )
# 724 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 263 "deriving_json/deriving_Json_lexer.mll"
                         ( lexer_error "Expected integer but found" v lexbuf )
# 729 "deriving_json/deriving_Json_lexer.ml"

  | 3 ->
# 264 "deriving_json/deriving_Json_lexer.mll"
                         ( custom_error "Unexpected end of input" v lexbuf )
# 734 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_int_rec v lexbuf __ocaml_lex_state

and read_positive_int v lexbuf =
    __ocaml_lex_read_positive_int_rec v lexbuf 73
and __ocaml_lex_read_positive_int_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 267 "deriving_json/deriving_Json_lexer.mll"
                         ( try extract_positive_int lexbuf
			   with Int_overflow ->
			     lexer_error "Int overflow" v lexbuf )
# 747 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 270 "deriving_json/deriving_Json_lexer.mll"
                         ( lexer_error "Expected integer but found" v lexbuf )
# 752 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 271 "deriving_json/deriving_Json_lexer.mll"
                         ( custom_error "Unexpected end of input" v lexbuf )
# 757 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_positive_int_rec v lexbuf __ocaml_lex_state

and read_int32 v lexbuf =
    __ocaml_lex_read_int32_rec v lexbuf 78
and __ocaml_lex_read_int32_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 274 "deriving_json/deriving_Json_lexer.mll"
                         ( try Int32.of_string (Lexing.lexeme lexbuf)
			   with _ ->
			     lexer_error "Int32 overflow" v lexbuf )
# 770 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 277 "deriving_json/deriving_Json_lexer.mll"
                         ( lexer_error "Expected int32 but found" v lexbuf )
# 775 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 278 "deriving_json/deriving_Json_lexer.mll"
                         ( custom_error "Unexpected end of input" v lexbuf )
# 780 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_int32_rec v lexbuf __ocaml_lex_state

and read_int64 v lexbuf =
    __ocaml_lex_read_int64_rec v lexbuf 84
and __ocaml_lex_read_int64_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 281 "deriving_json/deriving_Json_lexer.mll"
                         ( try Int64.of_string (Lexing.lexeme lexbuf)
			   with _ ->
			     lexer_error "Int32 overflow" v lexbuf )
# 793 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 284 "deriving_json/deriving_Json_lexer.mll"
                         ( lexer_error "Expected int64 but found" v lexbuf )
# 798 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 285 "deriving_json/deriving_Json_lexer.mll"
                         ( custom_error "Unexpected end of input" v lexbuf )
# 803 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_int64_rec v lexbuf __ocaml_lex_state

and read_number v lexbuf =
    __ocaml_lex_read_number_rec v lexbuf 90
and __ocaml_lex_read_number_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 288 "deriving_json/deriving_Json_lexer.mll"
                ( nan )
# 814 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 289 "deriving_json/deriving_Json_lexer.mll"
                ( infinity )
# 819 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 290 "deriving_json/deriving_Json_lexer.mll"
                ( neg_infinity )
# 824 "deriving_json/deriving_Json_lexer.ml"

  | 3 ->
# 291 "deriving_json/deriving_Json_lexer.mll"
                ( float_of_string (lexeme lexbuf) )
# 829 "deriving_json/deriving_Json_lexer.ml"

  | 4 ->
# 292 "deriving_json/deriving_Json_lexer.mll"
                ( lexer_error "Expected number but found" v lexbuf )
# 834 "deriving_json/deriving_Json_lexer.ml"

  | 5 ->
# 293 "deriving_json/deriving_Json_lexer.mll"
                ( custom_error "Unexpected end of input" v lexbuf )
# 839 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_number_rec v lexbuf __ocaml_lex_state

and read_string v lexbuf =
    __ocaml_lex_read_string_rec v lexbuf 123
and __ocaml_lex_read_string_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 296 "deriving_json/deriving_Json_lexer.mll"
             ( Buffer.clear v.buf;
	       finish_string v lexbuf )
# 851 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 298 "deriving_json/deriving_Json_lexer.mll"
             ( lexer_error "Expected '\"' but found" v lexbuf )
# 856 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 299 "deriving_json/deriving_Json_lexer.mll"
             ( custom_error "Unexpected end of input" v lexbuf )
# 861 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_string_rec v lexbuf __ocaml_lex_state

and read_lbracket v lexbuf =
    __ocaml_lex_read_lbracket_rec v lexbuf 127
and __ocaml_lex_read_lbracket_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 302 "deriving_json/deriving_Json_lexer.mll"
             ( () )
# 872 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 303 "deriving_json/deriving_Json_lexer.mll"
             ( lexer_error "Expected '[' but found" v lexbuf )
# 877 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 304 "deriving_json/deriving_Json_lexer.mll"
             ( custom_error "Unexpected end of input" v lexbuf )
# 882 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_lbracket_rec v lexbuf __ocaml_lex_state

and read_rbracket v lexbuf =
    __ocaml_lex_read_rbracket_rec v lexbuf 131
and __ocaml_lex_read_rbracket_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 307 "deriving_json/deriving_Json_lexer.mll"
             ( () )
# 893 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 308 "deriving_json/deriving_Json_lexer.mll"
             ( lexer_error "Expected ']' but found" v lexbuf )
# 898 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 309 "deriving_json/deriving_Json_lexer.mll"
             ( custom_error "Unexpected end of input" v lexbuf )
# 903 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_rbracket_rec v lexbuf __ocaml_lex_state

and read_case v lexbuf =
    __ocaml_lex_read_case_rec v lexbuf 135
and __ocaml_lex_read_case_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 312 "deriving_json/deriving_Json_lexer.mll"
                 ( try `Cst (extract_positive_int lexbuf)
                       with Int_overflow -> lexer_error "Int overflow" v lexbuf )
# 915 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 314 "deriving_json/deriving_Json_lexer.mll"
                 ( read_space v lexbuf;
		   `NCst (read_positive_int v lexbuf) )
# 921 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 316 "deriving_json/deriving_Json_lexer.mll"
                 ( lexer_error "Expected positive integer or '[' but found" v lexbuf )
# 926 "deriving_json/deriving_Json_lexer.ml"

  | 3 ->
# 317 "deriving_json/deriving_Json_lexer.mll"
                 ( custom_error "Unexpected end of input" v lexbuf )
# 931 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_case_rec v lexbuf __ocaml_lex_state

and read_vcase v lexbuf =
    __ocaml_lex_read_vcase_rec v lexbuf 141
and __ocaml_lex_read_vcase_rec v lexbuf __ocaml_lex_state =
  match Lexing.engine __ocaml_lex_tables __ocaml_lex_state lexbuf with
      | 0 ->
# 320 "deriving_json/deriving_Json_lexer.mll"
                 ( try `Cst (extract_positive_int lexbuf)
                       with Int_overflow -> lexer_error "Int overflow" v lexbuf )
# 943 "deriving_json/deriving_Json_lexer.ml"

  | 1 ->
# 322 "deriving_json/deriving_Json_lexer.mll"
                 ( read_space v lexbuf;
		   let zero = read_positive_int v lexbuf in
		   if (zero <> 0) then
		     lexer_error
		       (Printf.sprintf "Expected 0 but found %d" zero) v lexbuf;
		   read_space v lexbuf;
		   read_comma v lexbuf;
		   read_space v lexbuf;
		   `NCst (read_int v lexbuf) )
# 956 "deriving_json/deriving_Json_lexer.ml"

  | 2 ->
# 331 "deriving_json/deriving_Json_lexer.mll"
                 ( lexer_error "Expected positive integer or '[' but found" v lexbuf )
# 961 "deriving_json/deriving_Json_lexer.ml"

  | 3 ->
# 332 "deriving_json/deriving_Json_lexer.mll"
                 ( custom_error "Unexpected end of input" v lexbuf )
# 966 "deriving_json/deriving_Json_lexer.ml"

  | __ocaml_lex_state -> lexbuf.Lexing.refill_buff lexbuf; __ocaml_lex_read_vcase_rec v lexbuf __ocaml_lex_state

;;

# 334 "deriving_json/deriving_Json_lexer.mll"
 

  let init_lexer ?buf lexbuf =
    let buf =
      match buf with
	  None -> Buffer.create 256
	| Some buf -> buf
    in
    {
      buf = buf;
      lnum = 1;
      bol = 0;
      lexbuf = lexbuf;
    }

  let read_bounded_int min max v lexbuf =
    let n = read_int v lexbuf in
    if n < min || n > max then
      lexer_error "Int outside of bounds" v lexbuf
    else
      n

  let read_bool v = read_space v v.lexbuf; read_bool v v.lexbuf
  let read_int v = read_space v v.lexbuf; read_int v v.lexbuf
  let read_bounded_int ?(min = 0) ~max v =
    read_space v v.lexbuf; read_bounded_int min max v v.lexbuf
  let read_int32 v = read_space v v.lexbuf; read_int32 v v.lexbuf
  let read_int64 v = read_space v v.lexbuf; read_int64 v v.lexbuf
  let read_number v = read_space v v.lexbuf; read_number v v.lexbuf
  let read_string v = read_space v v.lexbuf; read_string v v.lexbuf

  let read_case v = read_space v v.lexbuf; read_case v v.lexbuf
  let read_vcase v = read_space v v.lexbuf; read_vcase v v.lexbuf

  let read_lbracket v = read_space v v.lexbuf; read_lbracket v v.lexbuf
  let read_rbracket v = read_space v v.lexbuf; read_rbracket v v.lexbuf
  let read_comma v = read_space v v.lexbuf; read_comma v v.lexbuf
  let read_comma_or_rbracket v =
    read_space v v.lexbuf; read_comma_or_rbracket v v.lexbuf


# 1014 "deriving_json/deriving_Json_lexer.ml"
