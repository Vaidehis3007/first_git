<?php
/**
 * A readable and maintainable PHP code to swap two numbers.
 */

/**
 * Function to swap the values of two variables.
 *
 * @param int $a The first number to be swapped
 * @param int $b The second number to be swapped
 */
function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Example of swapping two numbers
$number1 = 5;
$number2 = 10;

echo "Before swapping: Number1 = $number1, Number2 = $number2\n";

swapNumbers($number1, $number2);

echo "After swapping: Number1 = $number1, Number2 = $number2\n";
?>

