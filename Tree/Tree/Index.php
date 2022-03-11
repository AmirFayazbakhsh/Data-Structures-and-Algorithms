<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "Tree.php";

try{

	//root
	$king = new TreeNode('king');
	$tree = new Tree($king);


	$vazir  = new TreeNode('vazir');
	$queen  = new TreeNode('queen');
	$pasha1 = new TreeNode('pasha1');
	$pasha2 = new TreeNode('pasha2');

	$king->addChildren($vazir);
	$king->addChildren($queen);

	$queen->addChildren($pasha1);
	$queen->addChildren($pasha2);

	return $tree->traverse($tree->root);



}catch(Exception $e){

	$e->getMessage();
}











?>