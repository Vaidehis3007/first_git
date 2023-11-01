<?php
/**
 * A readable and maintainable Fibonacci sequence generator in PHP
 */

/**
 * Function to generate the nth Fibonacci number
 *
 * @param int $n The position of the Fibonacci number to generate
 * @return int The nth Fibonacci number
 */
function fibonacci($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    }

    $fib = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib[$n];
}

// Generate and display the first 10 Fibonacci numbers
$numTerms = 10;
for ($i = 0; $i < $numTerms; $i++) {
    echo "Fibonacci($i) = " . fibonacci($i) . "\n";
}
?>

