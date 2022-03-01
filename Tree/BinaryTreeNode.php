<?php



class Node
{
	public $data;
	public $left;
	public $right;

	public $root;


	function __construct(string $data = NULL)
	{
		$this->data = $data;
		$this->left = NULL;
		$this->data = NULL;
		$this->root = NULL;
	}

	public function BinaryTree{

		$this->root = new Node(1);

	}
}



?>