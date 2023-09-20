<?php

$first = 0;
$second = 1;

echo "10 Fibonacci numbers up to 100:\n";

for ($i = 1; $i <= 10; $i++) {
    $current = $first + $second;
    
    if ($current > 100) {
        break;
    }
    
    echo $current . " ";
    
    $first = $second;
    $second = $current;
}
