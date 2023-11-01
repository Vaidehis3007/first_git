<?php
/**
 * A readable and maintainable factorial calculator in PHP
 */

/**
 * Calculate the factorial of a number
 *
 * @param int $n The number for which to calculate the factorial
 * @return int The factorial of the input number
 */
function factorial($n) {
    if ($n < 0) {
        return "Undefined (Factorial is not defined for negative numbers)";
    } elseif ($n == 0) {
        return 1; // 0! = 1
    } else {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

// Example: Calculate and display the factorial of 5
$number = 5;
$factorialResult = factorial($number);
echo "Factorial of $number is $factorialResult";
?>

