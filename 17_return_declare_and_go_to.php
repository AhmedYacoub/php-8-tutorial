<?php

/* return / declare / goto */

declare(strict_types=1); // <- declare statement

function sum(int $x, int $y) {
    return $x + $y; // <- return statement (stops function execution)
}

echo sum(1, 2);