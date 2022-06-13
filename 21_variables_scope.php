<?php

/* Variables scope */

// local & global scopes
$x = 1;

function foo()
{
    global $x;  // gives a variable a global scope, avoid using global or $GLOBALS[].
    $y = 2;

    echo $x; // <- out of scope, wont work unless using global keyword
}

foo();
var_dump($y);    // <- wont work