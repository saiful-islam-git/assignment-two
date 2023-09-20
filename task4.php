<?php

$n = 15;
function printFibonacci($n) {
    $first = 0;
    $second = 1;

    echo "First $n Fibonacci numbers:\n";

    for ($i = 1; $i <= $n; $i++) {
        echo $first . " ";

        $current = $first + $second;

        $first = $second;
        $second = $current;
    }
}

printFibonacci($n);
