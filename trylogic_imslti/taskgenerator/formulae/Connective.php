<?php
require_once 'Node.php';
/**
 * class Connective
 * Iherint the class Node
 * @var $infix
 * @var value of a Formula
 * @var $infix
 * @var $functional
 * @var $polish
 * @var $arity
 * @var $order
 * @var Array $children
 * */
class Connective extends Node {
	public $infix;
	public $functional;
	public $polish;
	public $arity;
	public $order;
	public $children;
	
	public function __construct($infix, $functional, $polish, $arity, $order){
		$this->infix = $infix;
		$this->functional = $functional;
		$this->polish = $polish;
		$this->arity = $arity;
		$this->order = $order;
		$this->value = 0;
		$this->children = array();
	}
	function toInfixNotation() {
		if ($this->arity > 2) throw new Exception("Operator of infix Notation with arity bigger than two: $functional");
		$result = "( ";
		if ($this->arity == 1) $result .= $this->infix . " ";
		$n = 1;
		foreach ($this->children as $filho) {
			$result .= $filho->toInfixNotation() . " ";
			if ($n != count($this->children)) $result .= $this->infix . " ";
			else $result .= ")";
			$n++;
		}
		return $result;
	}
	function toFunctionalNotation() {
		$result = $this->functional . "(";
		$n = 1;
		foreach ($this->children as $filho) {
			$result .= $filho->toFunctionalNotation();
			if ($n != count($this->children)) $result .= ",";
			else $result .= ")";
			$n++;
		}
		return $result;
	}
}
?>
