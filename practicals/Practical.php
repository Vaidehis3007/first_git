<?php

class Practical{
       
	//Prints hello world
	public static function printHello(){
		echo "Hello World";
	}

	/**
	 * Take two number as arguments and returns their sum.
	 * @param int $num1
	 * @param int $num2
	 * @return int
	 */

	public static function add($num1, $num2){
		return $num1+$num2;
	}
/* Takes an integer 'n' as an argument and returns an array of Fibonacci sequence containing 'n' integers.
 *
 * @param int $n
 * @return array
 */

	public static function generateFibonacciSequence($n){
		$sequence=[];
		$a=0;
		$b=1;

		for($i=0;$i<$n;$i++){
			$sequence[]=$a;
			$temp=$a;
			$a=$b;
			$b=$temp+$b;
		}

		return $sequence;
	}
}

//Example usages:
Practical::printHello();
echo "\n";
$result = Practical::add(5,3);
echo "Sum: ".$result."\n";
$fibonacciSequence=Practical::generateFibonacciSequence(10);
echo "Fibonacci Sequence: ". implode(',',$fibonacciSequence)."\n";

?>

