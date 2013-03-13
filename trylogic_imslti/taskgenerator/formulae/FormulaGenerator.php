<?php
/**
 * class FormulaGenerator
 * @var Array $connectives
 * @var Array $atoms
 * @var Integer $connectives_left
 * @var $root
 * */
class FormulaGenerator {
	public $connectives = array();
	public $atoms = array();
	private $connectives_left = 0;
	private $root;
	public function __construct($connectives, $atoms) {
		$this->connectives = $connectives;
		$this->atoms = $atoms;
	}

	public function generateFormula($complexity) {		
		if ($complexity < 0) {
			return;
		}
		
		// Generate
		$this->connectives_left = $complexity;
		// Get arbitrary atom
		if ($this->connectives_left == 0) $this->root = $this->atoms[array_rand($this->atoms,1)]; 
		else {
			$this->root = $this->rConnective();
			$this->connectives_left--;
			$this->recursiveGenerator($this->root);
		}
		
		return new Formula($this->root);
	}
	private function recursiveGenerator(&$root) {
		if ($root instanceof Atom) return;
		
		// It's not a Atom, and There is no more connective to add. Complexity Requirement satisfied, then adding Atoms to the Nodes.
		if ($this->connectives_left == 0) { 
			if ($root instanceof Connective) {
				for($i = $root->arity - count($root->children); $i > 0; $i--) {
					$root->children[] = $this->atoms[array_rand($this->atoms,1)];			
				}
			}
		}
		else { 
		// It's not a Atom, and there is more connective to add. Complexity Requirement not satisfied.
			if ($this->connectives_left > $root->arity) $min = $root->arity;
			else $min = $this->connectives_left;
			// Calculating the number of Connectives to be add
			$connectives_to_add = rand(1,$min); 
			
			for($i = 0; $i < $connectives_to_add; $i++) { 
				// Adding the connectives
				$x = $this->rConnective();
				$root->children[] = $x;
				$this->connectives_left--;
			}

			for($i = count($root->children); $i < $root->arity; $i++) { 
				// Adding Atoms to the Connectives.
				$root->children[] = $this->atoms[array_rand($this->atoms,1)];	
			}
			
			// Shuffling
			shuffle($root->children); 
			
			foreach($root->children as $child) {
				$this->recursiveGenerator($child);
			}
		}
		
	}
	private function rConnective() {
		$i = $this->connectives[rand(0,count($this->connectives)-1)];
		return new Connective($i->infix, $i->functional, $i->polish, $i->arity, $i->order);
	}
}
?>
