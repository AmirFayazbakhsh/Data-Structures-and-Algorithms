<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);









	class Recursive{

		public static function factorial($number){

			if($number == 0){

				return 1;
			}

			// Recursive Case
			echo $number.'<br>';

			return ($number * self::factorial($number - 1));





			// $data =1;

			// for ($i=1; $i < 5; $i++) { 
			// 	echo $data."<br>";
				
			// 	$data = $data * ($i+1);
			// }

			// return $data;



		}
	}
		// $obj = new Recursive;
	// echo  $obj->factorial(5);




	class factClass{

		public function fact($n){

			return ($n >= 1) ? $n * self::fact($n-1)   :  1;
		}

	}


	// $fact = new factClass();
	// echo $fact->fact(4);






	class fibonacci{

		public static function fib($n){ 

			return $n >= 3 ? self::fib($n - 1) + self::fib($n - 2) :  1;
		}
	}






	$fib = new fibonacci;

	print_r($fib->fib(3));





	// factorial(5) 
 //   factorial(4) 
 //      factorial(3) 
 //         factorial(2) 
 //            factorial(1) 
 //               return 1 
 //            return 2*1 = 2 
 //         return 3*2 = 6 
 //      return 4*6 = 24 
 //   return 5*24 = 120


?>