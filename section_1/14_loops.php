<?php

/* Loops */

while (true) {
    // loop infinitely until condition is false.
}

do {
    // loop infinitely until condition is false
} while (true);

// Incrementing for loop
for ($x = 0; $x <= 10; $x++) {
    // loop 10 times, starting from 0 till 9
}

// Decrementing for loop
for ($x = 10; $x > 0; $x--) {
    // loop 10 times, starting from 10 till 1
}

// foreach
$names = ['john', 'doe', 'jane', 'max', 'bruce'];

foreach ($names as $name) {
    echo $name;
}

// foreach key and value
$persons = [
    'person 1' => [
        'name' => 'John Doe',
        'age' => 22
    ],
    'person 2' => [
        'name' => 'Jane Doe',
        'age' => 19
    ],
];

foreach ($persons as $person => $info) {
    echo "{$person}: Hi, my name is {$info['name']}, my age is {$info['age']}";
}