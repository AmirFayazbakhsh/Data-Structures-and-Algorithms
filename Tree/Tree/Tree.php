<?php
	
	include "TreeNode.php";
	
	class Tree{ /// in this class you should set root and travers 

		public $root;

		function __construct(TreeNode $root){

			$this->root = $root;
		}


		public function traverse(TreeNode $node ,int $level = 0){

			if($node){

				echo str_repeat('-', $level);
				echo $node->data;


				foreach ($node->children as $childNode) {
					
					$this->traverse($childNode,$level+1);

				}
			}
		}


	}






?>