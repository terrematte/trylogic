Require Import Classical.


(* quantifiers *)

Parameter D : Set.

Parameter _d : D.

Definition _K (x : Prop) (y : D) : Prop := x.

Ltac remove_K :=
  match goal with
  | |- _K ?p _ => change p
  | H : _K ?p _ |- _ => change p in H
  | _ => progress unfold _K
  end ||
  idtac.

Definition _all (p : D -> Prop) : Prop :=
  forall x, p x.

(*
Notation "'all' x ',' p" :=
  (_all (fun x : D => p)) (at level 75, right associativity).

Notation "'all' '?' ',' p" :=
  (_all (fun _ => p)) (at level 75, right associativity).
*)

(*
Notation "'all' x ',' p" :=
  (_all (fun x : D => (fun y _ => y) p x)) (at level 75, right associativity).
*)

Notation "'all' x ',' p" :=
  (_all (fun x : D => _K p x)) (at level 75, right associativity).

Definition _exi (p : D -> Prop) : Prop :=
  exists x, p x.

(*
Notation "'exi' x ',' p" :=
  (_exi (fun x : D => p)) (at level 75, right associativity).

Notation "'exi' '?' ',' p" :=
  (_exi (fun _ => p)) (at level 75, right associativity).
*)

(*
Notation "'exi' x ',' p" :=
  (_exi (fun x => (fun y _ => y) p x)) (at level 75, right associativity).
*)

Notation "'exi' x ',' p" :=
  (_exi (fun x => _K p x)) (at level 75, right associativity).


(* structural tactics *)

Ltac ass X := exact X.

Ltac ins H X := assert (H : X).

(* backward tactics *)

Ltac con_i :=
  match goal with
  | |- _ /\ _ => split
  end ||
  fail "(the goal is not a conjunction)".

Ltac con_e1 R :=
  match goal with
  | |- ?G =>  refine (and_ind (fun (left : G) (_ : R) => left) (_ : G /\ R))
  end.

Ltac con_e2 L :=
  match goal with
  | |- ?G => refine (and_ind (fun (_ : L) (right : G) => right) (_ : L /\ G))
  end.

Ltac dis_i1 :=
  match goal with
  | |- _ \/ _ => left
  end ||
  fail "(the goal is not a disjunction)".

Ltac dis_i2 :=
  match goal with
  | |- _ \/ _ => right
  end ||
  fail "(the goal is not a disjunction)".

Ltac dis_e X H1 H2 :=
  match X with
  | ( _ \/ _ ) =>
   let x := fresh "H" in
   assert (x : X);
   [ idtac | elim x; clear x; [intro H1 | intro H2]
   ]
  end ||
  fail "(the argument is not a disjunction or the labels already exist)".

Ltac imp_i X :=
  match goal with
  | |- _ -> _ => intro X
  end ||
  fail "(the goal is not an implication)".

Ltac imp_e X := cut X.

Ltac neg_i X :=
  match goal with
  | |- ~ _ => intro X
  end ||
  fail "(the goal is not a negation)".

Ltac neg_e X := absurd X.

Ltac fls_e := apply False_ind.

Ltac tru_i := exact I ||
  fail "(the goal is not True)".

Ltac eqv_i :=
  match goal with
  | |- _ <-> _ => split
  end ||
  fail "(the goal is not an equivalence)".

Ltac eqv_e1 :=
  match goal with
  | |- (?A -> ?B) => refine (and_ind (fun (x : A -> B) (_ : B -> A) => x) (_ : A <-> B))
  end ||
  fail "(the goal is not an implication)".

Ltac eqv_e2 :=
  match goal with
  | |- (?B -> ?A) => refine (and_ind (fun (_ : A -> B) (y : B -> A) => y) (_ : A <-> B))
  end ||
  fail "(the goal is not an implication)".

Ltac iff_i H1 H2 :=
 match goal with
 | |- _ <-> _ =>
 eqv_i ; [ (imp_i H1) | (imp_i H2) ]
 end ||
 fail "(the goal is not a bi-implication)".

Ltac iff_e1 L :=
 cut L ; [ eqv_e1 | idtac ].

Ltac iff_e2 R :=
 cut R ; [ eqv_e2 | idtac ].

Ltac negneg_i :=
  match goal with
  | |- (~~ ?X) => let H := fresh "H" in intro H; apply H; clear H
  end ||
  fail "(the goal is not a double negation)".

Ltac negneg_e :=
  match goal with
  | |- ?H => apply (NNPP H)
  end.

Ltac LEM :=
  match goal with
  | |- ?H \/ ~ ?H => apply classic
  end ||
  fail "(the goal is not of the form A \/ ~A)".

Ltac PBC X :=
  negneg_e; intro X.

Ltac RAA := PBC.

Ltac MT A :=
  match goal with
  | |- (~ ?B) =>
      refine ((fun (H1 : B -> A) (H2 : ~A) (H : B) => H2 (H1 H)) _ _)
  end ||
  fail "(the goal is not a negation)".

Ltac all_i X :=
  match goal with
  | |- forall _, _ => intro X
  | |- _all _ => intro X; remove_K
  end ||
  fail "(the goal is not a universal quantification)".

Ltac all_e X :=
  match X with
  | forall _ : _ , _ => refine ((_ : X) _)
  | _all _ => (refine ((_ : X) _); [idtac | exact _d]) || refine ((_ : X) _)
  end ||
  fail "(the argument is not a universal quantification)".

Ltac all_e' X A :=
  match X with
  | forall _ : _ , _ => refine ((_ : X) A)
  | _all _ => refine ((_ : X) A)
  end ||
  fail "(the argument is not a universal quantification)".

Ltac exi_i X :=
  match goal with
  | |- exists x : _ , _ => exists X
  | |- _exi _ => exists X; remove_K
  end ||
  fail "(the goal is not an existential quantification)".

Ltac exi_e X a H :=
  match X with
  | ex _ => refine ((fun x y => ex_ind y (x : X)) _ _) ; [idtac | all_i a ; imp_i H]
  | _exi _ => refine ((fun x y => ex_ind y (x : X)) _ _) ; [idtac | all_i a ; imp_i H; remove_K]
  end ||
  fail "(the argument is not an existential quantification)".

Ltac equ_i := reflexivity.

Ltac equ_e X :=
  match X with
  | (?x = ?y) => let H := fresh "H" in
      assert (H : X); [idtac | rewrite <- H; clear H]
  end ||
  fail "(argument is not an equality)".

Ltac equ_e' X Y :=
  match X with
  | (?x = ?y) => let H := fresh "H" in
      assert (H : X); [idtac | change (Y y); rewrite <- H; clear H]
  end ||
  fail "(first not an equality or second argument not a context)".

(* convenience synonyms *)

Ltac copy := ass.
Ltac insert := ins.
Ltac MP := imp_e.
Ltac false_e := fls_e.
Ltac False_e := fls_e.
Ltac true_i := tru_i.
Ltac True_i := tru_i.
Ltac eq_i := equ_i.
Ltac eq_e := equ_e.
Ltac eq_e' := equ_e'.

(* "backward" synonyms *)

Ltac x_ass := ass.
Ltac x_ins := ins.
Ltac b_con_i := con_i.
Ltac b_con_e1 := con_e1.
Ltac b_con_e2 := con_e2.
Ltac b_dis_i1 := dis_i1.
Ltac b_dis_i2 := dis_i2.
Ltac b_dis_e := dis_e.
Ltac b_imp_i := imp_i.
Ltac b_imp_e := imp_e.
Ltac b_neg_i Y := neg_i Y.
Ltac b_neg_e := neg_e.
Ltac b_fls_e := fls_e.
Ltac b_tru_i := tru_i.
Ltac b_eqv_i := eqv_i.
Ltac b_eqv_e1 := eqv_e1.
Ltac b_eqv_e2 := eqv_e2.
Ltac b_iff_i := iff_i.
Ltac b_iff_e1 := iff_e1.
Ltac b_iff_e2 := iff_e2.
Ltac b_negneg_i := negneg_i.
Ltac b_negneg_e := negneg_e.
Ltac b_LEM := LEM.
Ltac b_PBC := PBC.
Ltac b_RAA := RAA.
Ltac b_MT := MT.
Ltac b_all_i := all_i.
Ltac b_all_e := all_e.
Ltac b_exi_i := exi_i.
Ltac b_exi_e := exi_e.
Ltac b_equ_i := equ_i.
Ltac b_equ_e := equ_e.
Ltac b_equ_e' := equ_e'.

(* "forward" tactics *)

Ltac f_con_i X Y :=
  exact (conj X Y) ||
  fail "(goal is not the correct conjuction)".

Ltac f_con_e1 X :=
  exact (proj1 X) ||
  fail "(argument is not a correct conjunction)".

Ltac f_con_e2 X :=
  exact (proj2 X) ||
  fail "(argument is not a correct conjunction)".

Ltac f_dis_i1 X :=
  match goal with
  | |- ?A \/ ?B => exact (or_introl B X)
  end ||
  fail "(goal is not the correct disjunction)".

Ltac f_dis_i2 X :=
  match goal with
  | |- ?A \/ ?B => exact (or_intror A X)
  end ||
  fail "(goal is not the correct disjunction)".

Ltac f_dis_e X H1 H2 :=
  match type of X with
  | _ \/ _ => elim X; [intro H1 | intro H2]
  end ||
  fail "(argument is not a disjunction)".

Ltac f_imp_e X Y :=
  match type of X with
  | ( _ -> _ ) => exact (X Y)
  end ||
  fail "(argument do not fit the goal; maybe the wrong order?)".

Ltac f_neg_e X Y :=
  match type of X with
  | ( ~ _ ) => exact (X Y)
  end ||
  fail "(argument do not fit the goal; maybe the wrong order?)".

Ltac f_fls_e X :=
  match goal with
  | |- ?A => exact (False_ind A X)
  end ||
  fail "(argument is not a proof of False)".

Ltac f_tru_i := tru_i.

Ltac f_iff_e1 X Y := exact (proj1 X Y).

Ltac f_iff_e2 X Y := exact (proj2 X Y).

Ltac f_negneg_i Y :=
  match goal with
  | |- ~ ~ ?A => exact (fun (X : ~A) => X Y)
  end ||
  fail "(goal is not a double negation or argument does not fit the goal)".

Ltac f_negneg_e X :=
  match goal with
  | |- ?Y => exact (NNPP Y X)
  end ||
  fail "(argument is not a double negation, or does not fit the goal)".

Ltac f_LEM := LEM.

Ltac f_MT X Y :=
  match type of X with
  | ( _ -> _) => 
    match type of Y with
    | ( ~ _ ) => exact (fun H => Y (X H))
    end
  end ||
  fail "(modus tollens is not applicable with this goal and arguments)".

Ltac f_all_e X :=
  match type of X with
  | ( forall _, _ ) => refine (X _); (exact _d || fail)
  | ( _all _ ) => refine (X _); (exact _d || fail)
  end ||
  fail "(argument is not a universally quantified formula or does not fit the goal)".

Ltac f_exi_i X :=
  match goal with
  | |- ex ?p => refine (ex_intro p _ X); (exact _d || fail)
  | |- _exi ?p => refine (ex_intro p _ X); (exact _d || fail)
  end ||
  fail "(goal is not an existentially quantified formula or does not fit the argument)".

Ltac f_exi_e H a Y :=
  match type of H with
  | ?X => exi_e X a Y; [ass H | idtac]
  end.

Ltac f_equ_i := equ_i.

Lemma f_equal' :
  forall (A B : Type) (f g : A -> B) (x y : A), f = g -> x = y -> f x = g y.
intros. rewrite H. rewrite H0. reflexivity.
Qed.

Lemma equ_eqv : forall (x y : Prop), x = y -> (x <-> y).
intros. rewrite H. tauto.
Qed.

Lemma forall_eqv : forall (A : Type) (p q : A -> Prop),
  (forall x, p x <-> q x) -> ((forall x, p x) <-> (forall x, q x)).
intros. split; intros; generalize (H x); intros; elim H1; auto.
Qed.

Lemma all_eqv : forall (p q : D -> Prop),
  (forall x, p x <-> q x) -> (_all p <-> _all q).
unfold _all. apply forall_eqv.
Qed.

Lemma exists_eqv : forall (A : Type) (p q : A -> Prop),
  (forall x, p x <-> q x) -> ((exists x, p x) <-> (exists x, q x)).
intros. split; intros; elim H0; intros; exists x; elim (H x); auto.
Qed.

Lemma exi_eqv : forall (p q : D -> Prop),
  (forall x, p x <-> q x) -> (_exi p <-> _exi q).
unfold _exi. apply exists_eqv.
Qed.

Ltac f_equ_e_aux X :=
  match goal with
  | |- _ = _ => reflexivity || exact X
  | |- ?A <-> ?A => apply iff_refl
  | |- (forall _, _) <-> (forall _, _) =>
      apply forall_eqv; intro; f_equ_e_aux X
  | |- _all _ <-> _all _ =>   
      apply all_eqv; intro; f_equ_e_aux X
  | |- ex _ <-> ex _ =>
      apply exists_eqv; intro; f_equ_e_aux X
  | |- _exi _ <-> _exi _ =>   
      apply exi_eqv; intro; f_equ_e_aux X
  | |- ?F ?A <-> ?F ?B =>
      assert (A <-> B); [f_equ_e_aux X | tauto]
  | |- ?F ?A1 ?A2 <-> ?F ?B1 ?B2 =>
      assert (A1 <-> B1); [f_equ_e_aux X |
      assert (A2 <-> B2); [f_equ_e_aux X |
        tauto]]
  | |- ?p <-> ?q => apply equ_eqv; f_equ_e_aux X
  | |- ?p ?x = ?q ?y =>
      refine (@f_equal' _ _ p q x y _ _); f_equ_e_aux X
  | |- ?p ?x1 ?x = ?q ?y1 ?y =>
      refine (@f_equal' _ _ (p x1) (q y1) x y _ _); f_equ_e_aux X
  | |- ?p ?x1 ?x2 ?x = ?q ?y1 ?y2 ?y =>
      refine (@f_equal' _ _ (p x1 x2) (q y1 y2) x y _ _); f_equ_e_aux X
  | |- ?p ?x1 ?x2 ?x3 ?x = ?q ?y1 ?y2 ?y3 ?y =>
      refine (@f_equal' _ _ (p x1 x2 x3) (q y1 y2 y3) x y _ _); f_equ_e_aux X
  | |- ?p ?x1 ?x2 ?x3 ?x4 ?x = ?q ?y1 ?y2 ?y3 ?y4 ?y =>
      refine (@f_equal' _ _ (p x1 x2 x3 x4) (q y1 y2 y3 y4) x y _ _); f_equ_e_aux X
  | |- ?p ?x1 ?x2 ?x3 ?x4 ?x5 ?x = ?q ?y1 ?y2 ?y3 ?y4 ?y5 ?y =>
      refine (@f_equal' _ _ (p x1 x2 x3 x4 x5) (q y1 y2 y3 y4 y5) x y _ _); f_equ_e_aux X
  | |- ?p ?x1 ?x2 ?x3 ?x4 ?x5 ?x6 ?x = ?q ?y1 ?y2 ?y3 ?y4 ?y5 ?y6 ?y =>
      refine (@f_equal' _ _ (p x1 x2 x3 x4 x5 x6) (q y1 y2 y3 y4 y5 y6) x y _ _); f_equ_e_aux X
  | |- ?p ?x1 ?x2 ?x3 ?x4 ?x5 ?x6 ?x7 ?x = ?q ?y1 ?y2 ?y3 ?y4 ?y5 ?y6 ?y7 ?y =>
      refine (@f_equal' _ _ (p x1 x2 x3 x4 x5 x6 x7) (q y1 y2 y3 y4 y5 y6 y7) x y _ _); f_equ_e_aux X
  | |- ?p ?x1 ?x2 ?x3 ?x4 ?x5 ?x6 ?x7 ?x8 ?x = ?q ?y1 ?y2 ?y3 ?y4 ?y5 ?y6 ?y7 ?y8 ?y =>
      refine (@f_equal' _ _ (p x1 x2 x3 x4 x5 x6 x7 x8) (q y1 y2 y3 y4 y5 y6 y7 y8) x y _ _); f_equ_e_aux X
  | |- ?p ?x1 ?x2 ?x3 ?x4 ?x5 ?x6 ?x7 ?x8 ?x9 ?x = ?q ?y1 ?y2 ?y3 ?y4 ?y5 ?y6 ?y7 ?y8 ?y9 ?y =>
      refine (@f_equal' _ _ (p x1 x2 x3 x4 x5 x6 x7 x8 x9) (q y1 y2 y3 y4 y5 y6 y7 y8 y9) x y _ _); f_equ_e_aux X
  | _ => idtac
  end.

Ltac f_equ_e X Y :=
  match type of X with
  | _ = _ =>
    match goal with
    | |- ?Z => let H := fresh "H" in
        let Y' := type of Y in
        assert (H : (Y' <-> Z)); [f_equ_e_aux X; fail | exact (proj1 H Y)]
    end
  end ||
  fail "(first argument not an equality, or second argument does not match the goal)".

(* convenience synonyms *)

Ltac f_MP := f_imp_e.
Ltac f_false_e := f_fls_e.
Ltac f_False_e := f_fls_e.
Ltac f_true_i := f_tru_i.
Ltac f_True_i := f_tru_i.
Ltac f_eq_i := f_equ_i.
Ltac f_eq_e := f_equ_e.

(* old synonyms *)

Ltac efq := fls_e.
Ltac dn := negneg_e.
Ltac tnd_axiom := LEM.

Ltac con_in := con_i.
Ltac con_ell := con_e1.
Ltac con_elr := con_e2.
Ltac dis_inl := dis_i1.
Ltac dis_inr := dis_i2.
Ltac dis_el := dis_e.
Ltac imp_in := imp_i.
Ltac imp_el := imp_e.
Ltac neg_in := neg_i.
Ltac neg_el := neg_e.
Ltac eqv_in := eqv_i.
Ltac eqv_ell := eqv_e1.
Ltac eqv_elr := eqv_e2.
Ltac negneg_in := negneg_i.
Ltac equ_in := equ_i.
Ltac equ_el := equ_e.
Ltac equ_els := equ_e'.
Ltac all_in := all_i.
Ltac all_el := all_e'.
Ltac exi_in := exi_i.
Ltac exi_el := exi_e.

(* old tactics *)

Ltac dis_els X :=
  match X with
  | ( _ \/ _ ) =>
   assert X;
   [ idtac
     | match goal with
     | y : X |- _ => elim y; clear y
   end
   ]
  end ||
  fail "(the argument is not a disjunction)".

Ltac dn_axiom :=
  match goal with
  | |- (~~ ?X -> ?X) => apply (NNPP X)
  end ||
  fail "(the goal is not an instance of the double negation axiom)".

Ltac neg_ins X Y :=
  match goal with
  | |- ~ _ => intro Y; absurd X
  end ||
  fail "(the goal is not a negation)".

Ltac neg_els X Y := dn; intro Y; absurd X.

Ltac exi_els X :=
  match X with
  | ex _ => refine (ex_ind _ (_ : X))
  end ||
  fail "(the argument is not an existential quantification)".


