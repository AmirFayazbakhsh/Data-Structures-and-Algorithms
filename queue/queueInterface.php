<?php

	interface queueInterface{

		public function enqueue($item);
		public function dequeue();
		public function peek();
		public function isEmpty();
	}


 ?>