<?php

/* Floats */

$x = 13.5e-4;

// echo $x;

// echo PHP_FLOAT_MAX;
// echo PHP_FLOAT_MIN;
// echo PHP_FLOAT_DIG;
// echo M_PI;
// echo pi();

// Precisions
var_dump(0.7 + 0.1); // <- wrong value float(0.7999999999999999) 
echo bcadd("0.7", "0.1", 1); // <- correct value 0.8