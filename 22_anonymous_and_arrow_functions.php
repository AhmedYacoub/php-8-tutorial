<?php

/* Variable, anonymous and arrow functions */

// variable functions
function sum(int|float $x, int|float $y): int|float
{
    return $x + $y;
}

$result = 'sum';
// $result = 'sub';

if (is_callable($result)) {
    echo $result(1, 2);
} else {
    echo 'Not callable';
}


/* Anonymous (lambda) functions */
$i = 1;
$text = function ($formattedText) use (&$i) {
    $i++;
    return "<br>{$formattedText} - {$i}<br>";
};

// echo $text("Hello World!");
// echo $i;

$arr = [1, 2, 3, 4, 5];
$arr2 = array_map(function ($element) {
    return $element ** $element;
}, $arr);

// echo '<pre>';
// print_r($arr);
// print_r($arr2);
// echo '</pre>';

// Note:
// callable => Instance of normal function or anonymous function
// closure => Instance of anonymous function


/* Arrow functions */
$array1 = [1, 2, 3, 4, 5];
$multiplier = 5;

// in arrow functions, we don't use "use()" to pass parent variables
// instead it's always accessible
$array2 = array_map(
    fn ($number) => $number * $multiplier,  // <- arrow function
    $array1
);

$array3 = array_map(
    // loop on each element, do each of the below operations, and return an array
    // of each element operations values.
    fn ($number) => [
        $number * $number,
        $number * $multiplier,
        $number * $number * ++$multiplier
    ],
    $array1
);

echo '<pre>';
// print_r($array2);
print_r($array3);
echo '</pre>';
