<?php

declare(strict_types=1);

/* Function parameters */

function mult(int|float $x, int|float $y): int|float 
{
    return $x * $y;
}

// echo mult(5.5, 10.10);




/* Variadic functions */

/**
 * Undocumented function
 *
 * @param integer|float $x
 * @param integer|float $y
 * @param integer|float ...$numbers
 * @return integer|float
 */
function sum(int|float $x, int|float $y, int|float ...$numbers): int|float
{
    return $x + $y + array_sum($numbers);
}

// echo sum(1, 2);
// echo sum(1, 2, 454, 44.65, 4454.324, 4546, 232);

// $numbers = [2332, 343.323, 23423, 32432];
// echo sum(1, 2, ...$numbers);   // <- unpack array to function arguments using the splat operator (...)

// passing an associative array (using splat operator ...) 
// that contains function arguments as keys will treat
// array keys as arguments names.
// same as: sum(x: 1, y: 2);

// $args = ['x' => 1, 'y' => 2];   // <- works
// $args = ['y' => 2, 'x' => 1];   // <- also works, even if we didn't pass arguments in order.
// echo sum(...$args);



/* Named arguments */
function fullName (string $firstName, string $lastName): string
{
    return "{$firstName} {$lastName}";
}

// echo fullName('John', 'Doe');
// echo fullName(lastName: 'John', firstName: 'Doe');  // <- pass arguments without order and specifying arguments names.