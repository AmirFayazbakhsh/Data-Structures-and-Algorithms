<?php 


include "QueueInterface.php";





	class queue implements QueueInterface{


			public $limit;
			public $stack;


		 public function __construct($limit) {

		 	$this->limit = $limit;
		 	$this->stack = [];

		}


		public function enqueue($item){

			if($this->peek() > $this->limit){
				throw new OverflowException('Queue is full');
			}else{
			    array_unshift($this->stack, $item);

			}


		}

		public function dequeue(){

			if($this->isEmpty()){
				throw new underflowException('Queue is empty');
			}
			else{

				array_pop($this->stack);

			}

		}

		public function peek(){

			return count($this->stack);
		}



		public function isEmpty(){

			return empty($this->stack);
		}
	}




?>