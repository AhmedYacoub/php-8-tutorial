<?php

require_once 'helpers.php';

/* Working with arrays */
/* array_chunk() */
/* array_combine() */
/* array_filter() */
/* array_keys() & array_values() */
/* array_map() */
/* array_merge() */
/* array_reduce */
/* array_search() & in_array() */
/* array_diff() */
/* asort(), ksort() & usort() */



/* array_chunk() */
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

// splits an array into chunks (arrays)
// toPrettyArray(array_chunk($arr, 3, true));

/* array_combine() */
$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];

// combines 2 arrays into a single array, using the first
// array as keys and second array as values.
// toPrettyArray(array_combine($arr1, $arr2));


/* array_filter() */
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// filters an array using a callback function
// toPrettyArray(array_filter($numbers, fn ($number) => $number % 2 === 0)); // <- even numbers
// toPrettyArray(array_filter($numbers, fn ($number) => $number % 2)); // <- odd numbers
// toPrettyArray(array_filter($numbers, fn ($number) => $number % 2 === 0), ARRAY_FILTER_USE_KEY); // <- filter only even array-keys, NOTE: array index/key [1] is considered even.
// toPrettyArray(array_filter($numbers, fn ($number) => $number % 2 === 0), ARRAY_FILTER_USE_BOTH); // <- filter both even keys-values

/* array_keys() & array_values() */
// toPrettyArray(array_keys($numbers));    // get array keys only.
// toPrettyArray(array_values($numbers));  // get array values only.

/* array_map() */
$evenNumbers = ['a' => 2, 'b' => 4, 'c' => 6];
$oddNumbers = ['d' => 1, 'e' => 3, 'f' => 5];

// // using array_map() on one array
// toPrettyArray(array_map(fn ($evenNumber) => $evenNumber * 2, $evenNumbers));    // <- preserve array keys

// // using array_map() on two or more arrays
// toPrettyArray(
//     array_map(
//         fn ($evenNumber, $oddNumber) => $evenNumber + $oddNumber,
//         $evenNumbers,
//         $oddNumbers
//     )
// ); // <- wont preserve arrays keys


/* array_merge() */
// toPrettyArray(array_merge($numbers, $evenNumbers, $oddNumbers));


/* array_reduce() */
$invoiceItems = [
    ['price' => 10.99, 'qty' => 2, 'desc' => 'Item 1'],
    ['price' => 23.99, 'qty' => 2, 'desc' => 'Item 2'],
    ['price' => 6.99, 'qty' => 1, 'desc' => 'Item 3'],
    ['price' => 19.99, 'qty' => 3, 'desc' => 'Item 4'],
    ['price' => 45.99, 'qty' => 1, 'desc' => 'Item51'],
];

$tax = 10;

/**
 * @param array $invoiceItems
 * @param callback, $sum is holding previous iteration value, $item holding current iteration.
 * @param mixed $initial, holds initial value of the calculation
 */
// $total = array_reduce(
//     $invoiceItems,
//     fn ($sum, $item) => $sum + $item['qty'] * $item['price'],
//     $tax
// );

// echo $total;

/* array_search() & in_array() */
$letters = ['a', 'b', 'B', 'c', 'd', 1, '1'];

// echo 'index #' . array_search('1', $letters, true) . '<br>';

// if (in_array('1', $letters, true)) {
//     echo 'found array element <br>';
// }


/* array_diff() */
$letters1 = ['a' => 1, 'z' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7];
$letters2 = ['b' => 2, 'c' => 3, 'd' => 4];
$letters3 = ['c' => 3, 'd' => 4, 'e' => 5];

//// difference based on values (include only $letters1 elements their VALUES do not exist in $letters2 and $letters3 arrays)
// toPrettyArray(array_diff($letters1, $letters2, $letters3)); 

//// difference based on index (include only $letters1 elements their KEYS do not exist in $letters2 and $letters3 arrays)
// toPrettyArray(array_diff_assoc($letters1, $letters2, $letters3));


/* asort(), ksort() & usort() */
// asort($letters1); // <- sort an array by values.
// toPrettyArray($letters1);

// ksort($letters1); // <- sort an array by keys/indexes
// toPrettyArray($letters1);

// Custom use-case sorting based on callback condition
// usort($letters1, fn ($letter1, $letter2) => $letter1 <=> $letter2); //  ascending order
// toPrettyArray($letters1);

// Custom use-case sorting based on callback condition
// usort($letters1, fn ($letter1, $letter2) => $letter2 <=> $letter1); // descending order
// toPrettyArray($letters1);


/* Destructing array elements into separate variables */
$demoArr = [1, 2, 3, 4];

// [$a, $b, $c, $d] = $demoArr;
// echo "{$a}, {$b}, {$c}, {$d}</br>";

// [$a, , $c, $d] = $demoArr;
// echo "{$a}, {$c}, {$d}</br>";

// $demoArr2 = [1, 2, [3, 4]];
[$a, $b, [$c, $d]] = $demoArr2;
echo "{$a}, {$b}, {$c}, {$d}</br>";
