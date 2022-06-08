<?php

/* Arrays */
$programmingLanguages = ['PHP', 'Java', 'Python'];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo '<br>';
// Array length
echo count($programmingLanguages);

// Adding elements to array
$programmingLanguages[] = 'C++';

// Adding elements to array
array_push($programmingLanguages, 'C#', 'Go', 'Kotlin');

// Remove first index of an array
array_shift($programmingLanguages);

// Remove last index of an array
array_pop($programmingLanguages);

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo '<br>';



/* Associative arrays */
$tasks = [
    'task 1' => 'Do your homework',
    'task 2' => 'Go to GYM',
    'task 3' => 'Go to bed',
];

echo 'Associative arrays';
echo '<pre>';
print_r($tasks);
echo '</pre>';
echo '<br>';

// Adding elements to associative arrays
$tasks['task 4'] = 'Get up early';

echo 'Associative arrays';
echo '<pre>';
print_r($tasks);
echo '</pre>';
echo '<br>';

/* Multidimensional arrays */
$persons = [
    1 => [
        'name' => 'Ahmed Yacoub',
        'age' => '28',
        'position' => 'Software engineer',
        'hobbies' => [
            'Football',
            'Music'
        ]
    ],
    2 => [
        'name' => 'John Doe',
        'age' => '32',
        'position' => 'Accountant',
        'hobbies' => [
            'Football',
            'Music'
        ]
    ],
];

echo 'Multidimensional arrays';
echo '<pre>';
print_r($persons);
echo '</pre>';
echo '<br>';

// Accessing multidimensional arrays
echo $persons[1]['name'];
echo '<br>';

// Check if array key exists
var_dump(array_key_exists(1, $persons));