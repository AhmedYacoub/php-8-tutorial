<?php

/* Functions */

function greet(): string {
    return 'Hello World!';
}

// echo greet();

// type-hinting for parameters and return types.
function sum(int $x, int $y): int|string {
    $z = $x + $y;
    
    return $z >= 0 ? $z : 'can not sum negative numbers';
}

// echo sum(-3, -5);


// type-hinting for nullable parameters
/**
 * return a greeting.
 *
 * @param string|null $firstName
 * @param string|null $lastName
 * @return string
 */
function introduce(?string $firstName, ?string $lastName) : ?string
{
    if ($firstName) {
        return "Hi, my name is {$firstName} {$lastName}.";
    }

    return null;
}

// echo '> ' . introduce('Ahmed', 'Yacoub') . '<br>';
// echo '> ' . introduce('Ahmed', null) . '<br>';
// echo '> ' . introduce(null, null) . '<br>';