<?php

/* Booleans */
$isComplete = true;
$isIncomplete = FALSE;

/* 
    Data types that PHP evaluates to false in 
    conditional statements and operators 
*/
// integers: 0 and -0
// floats: 0.0 and -0.0
// strings: '' empty string is false
// a stringed zero i.e '0' or "0" is considered a false
// arrays: [] empty array is false
// null = false

echo is_bool($isComplete);
