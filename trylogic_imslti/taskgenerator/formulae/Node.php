<?php

/**
 * class Node
 * 
 * @var content of a Formula
 * @var value of a Formula
 * 
 * */
abstract class Node {
	public $content;
	public $value;

	public function isAtom() {
		return ($this instanceof Atom);
	}
	
}
?>
