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

			return ($number * self::factorial($number - 1));



		}
	}


	$obj = new Recursive;
	echo  $obj->factorial(5);










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