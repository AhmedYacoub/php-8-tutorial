<?php

/* Assign variables by value */
$x = 1;
$y = $x;

// prints $x value which is 1
echo $y;


/* Assign by reference */
$i = 10;
$j = &$i;

// Reassign $i value
$i = 30;

// prints $i current value, referenced in memory, which is 30
echo $j;