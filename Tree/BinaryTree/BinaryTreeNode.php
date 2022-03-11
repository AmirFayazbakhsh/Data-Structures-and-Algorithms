<?php


class BinaryTreeNode{


	public $data;
	public $left;
	public $right;

	function __construct(string $data = NULL){

		$this->data = $data;
		$this->left = NULL; 
		$this->right = NULL; 
	}

	public function addChildren(BinaryTreeNode $left, BinaryTreeNode $right){

		$this->left = $left;
		$this->right = $right;

	}
}






?>