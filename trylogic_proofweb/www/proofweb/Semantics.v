(** Semantic of Classical Propositional Logic *)

Inductive label (l : Type)(A : Prop) : Prop := pair : l -> A -> (label l A).


Parameter T F : Type.


Notation "'v' '||--' A" := (label T A) (at level 10, no associativity, format "'v' '||--'   A").
Notation "'v' '||-/-' A" := (label F A) (at level 10, no associativity, format "'v' '||-/-'  A"). 


(* Structural Tactics *)

Ltac ass X := exact X.

(* Axioms *)
 
Axiom ax_negT : forall P:Prop, (label F (P)) -> (label T (~P)).
Axiom ax_negF : forall P:Prop, (label T (P)) -> (label F (~P)).

Axiom ax_conjF1 : forall P Q:Prop, (label F (P)) -> (label F (P /\ Q)).
Axiom ax_conjF2 : forall P Q:Prop, (label F (Q)) -> (label F (P /\ Q)).

Axiom ax_conjT : forall P Q:Prop,  ((label T (P)) /\ (label T (Q)))  -> (label T (P /\ Q)).


Axiom ax_disjT1 : forall P Q:Prop, (label T (P)) -> (label T (P \/ Q)).
Axiom ax_disjT2 : forall P Q:Prop, (label T (Q)) -> (label T (P \/ Q)).

Axiom ax_disjF : forall P Q:Prop,  ((label F (P)) /\ (label F (Q)))  -> (label F (P \/ Q)).

Axiom ax_impT1 : forall P Q:Prop, (label F (P)) -> (label T (P -> Q)).
Axiom ax_impT2 : forall P Q:Prop, (label T (Q)) -> (label T (P -> Q)).

Axiom ax_impF : forall P Q:Prop,  ((label T (P)) /\ (label F (Q)))  -> (label F (P -> Q)).

Axiom ax_iffFF : forall P Q:Prop,  ((label F (P)) /\ (label F (Q)))  -> (label T (P <-> Q)).
Axiom ax_iffTT : forall P Q:Prop,  ((label T (P)) /\ (label T (Q)))  -> (label T (P <-> Q)).
Axiom ax_iffFT : forall P Q:Prop,  ((label F (P)) /\ (label T (Q)))  -> (label F (P <-> Q)).
Axiom ax_iffTF : forall P Q:Prop,  ((label T (P)) /\ (label F (Q)))  -> (label F (P <-> Q)).


(** TACTICS **)


(** NEGATION TACTICS *)


Ltac negT:= match goal with
  [ |- (label T (~_)) ] => apply ax_negT
end
||
fail "(the goal is not a Satisfied Negation)".


Ltac negF:= match goal with
  [ |- (label F (~_)) ] => apply ax_negF
end
||
fail "(the goal is not a Unsatisfied Negation)".


(** CONJUCTION TACTICS *)

Ltac conjF1:= match goal with
 | [ |- (label F (_ /\ _)) ] => apply ax_conjF1 
end
||
fail "(the goal is not a Unsatisfied Conjunction)".


Ltac conjF2:= match goal with
 | [ |- (label F (_ /\ _)) ] => apply ax_conjF2
end
||
fail "(the goal is not a Unsatisfied Conjunction)".


Ltac conjT:= match goal with
 | [ |- (label T (_ /\ _)) ] => apply ax_conjT ; split
end
||
fail "(the goal is not a Satisfied Conjunction)".


(** DISJUNCTION TACTICS *)

Ltac disjT1:= match goal with
 | [ |- (label T (_ \/ _)) ] => apply ax_disjT1 
end
||
fail "(the goal is not a Satisfied Disjunction)".


Ltac disjT2:= match goal with
 | [ |- (label T (_ \/ _)) ] => apply ax_disjT2
end
||
fail "(the goal is not a Satisfied Disjunction)".


Ltac disjF:= match goal with
 | [ |- (label F (?P \/ ?Q)) ] => apply ax_disjF ; split
end
||
fail "(the goal is not a Unsatisfied Disjunction)".


(** IMPLICATION TACTICS *)


Ltac impT1:= match goal with
 | [ |- (label T (_ -> _)) ] => apply ax_impT1
end
||
fail "(the goal is not a Satisfied Implication)".


Ltac impT2:= match goal with
 | [ |- (label T (_ -> _)) ] => apply ax_impT2
end
||
fail "(the goal is not a Satisfied Implication)".


Ltac impF:= match goal with
 | [ |- (label F (?P -> ?Q)) ] => apply ax_impF ; split
end
||
fail "(the goal is not a Unsatisfied Implication)".


(** BIIMPLICATION TACTICS *)


Ltac iffTT:= match goal with
 | [ |- (label T (?P <-> ?Q)) ] => apply ax_iffTT ; split
end
||
fail "(the goal is not a Satisfied Bi-implication)".

Ltac iffFF:= match goal with
 | [ |- (label T (?P <-> ?Q)) ] => apply ax_iffFF ; split
end
||
fail "(the goal is not a Satisfied Bi-implication)".

Ltac iffFT:= match goal with
 | [ |- (label F (?P <-> ?Q)) ] => apply ax_iffFT ; split
end
||
fail "(the goal is not a Unsatisfied Bi-implication)".


Ltac iffTF:= match goal with
 | [ |- (label F (?P <-> ?Q)) ] => apply ax_iffTF ; split
end
||
fail "(the goal is not a Unsatisfied Bi-implication)".


