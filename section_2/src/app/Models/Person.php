<?php

namespace App\Models;

class Person
{
    public int $id;

    public function __construct(public float $wage) {
        $this->id = random_int(1, 9999);
    }
}