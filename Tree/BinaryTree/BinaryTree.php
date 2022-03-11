<?php


	class BinaryTree{
		

		public $root;

		function __construct(BinaryTreeNode $rootValue)
		{
			$this->root = $rootValue;
		}


		public function isEmpty():bool {

			return $this->root === NULL;
		}


		public function traverse(){

		}
	}




?>