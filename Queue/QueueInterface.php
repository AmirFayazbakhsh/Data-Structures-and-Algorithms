<?php
	// namespace DS\Queue\Interfaces;

	
	interface QueueInterface{

		public function enqueue($item);
		public function dequeue();
		public function peek();
		public function isEmpty();
	}


 ?>