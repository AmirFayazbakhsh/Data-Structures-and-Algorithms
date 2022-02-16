<?php

class BinaryTree{

	public $Value;
	public $leftNode;
	public $rightNode;

	function __construct($Value){

		$this->value 		= $Value;
		$this->leftNode 	= null;
		$this->rightNode 	= null;
	}
}



$a = new BinaryTree('a');
$b = new BinaryTree('b');
$c = new BinaryTree('c');
$d = new BinaryTree('d');
$e = new BinaryTree('e');
$f = new BinaryTree('f');

$a->leftNode 	= $b;
$a->rightNode 	= $c;

$b->leftNode	= $d;
$b->rightNode	= $e;

$c->leftNode	= $f;


?>