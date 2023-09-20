<?php
// for loop

$start = 2;
$end = 20;
$step = 2;

function evenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

evenNumbersFor($start, $end, $step);

echo PHP_EOL;

// while loop

function evenNumbersWhile($start, $end, $step) {
    while ($start <= $end) {
        echo $start . " ";
        $start += $step;
    }
}

evenNumbersWhile($start, $end, $step);

echo PHP_EOL;

// do-while loop

function evenNumbersDoWhile($start, $end, $step) {
    do {
        echo $start . " ";
        $start += $step;
    } while ($start <= $end);
}

evenNumbersDoWhile($start, $end, $step);
