<?php

/* Variable variable */

$foo = 'bar';
$$foo = 'baz'; // shorthand for $bar = 'baz';

echo '$foo = ' . "{$foo}<br>";
echo '$bar = ' . "{$bar}<br>";