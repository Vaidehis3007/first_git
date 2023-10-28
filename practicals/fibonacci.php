<?php
function generateFibonacci($n) {
    $fib = [];
    $fib[0] = 0;
    $fib[1] = 1;
    
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    
    return $fib;
}

$n = 10; // Change this to the number of Fibonacci numbers you want
$fibonacciSeries = generateFibonacci($n);

foreach ($fibonacciSeries as $number) {
    echo $number . " ";
}
?>

