<?php

namespace App\Traits;

trait CoffeeTrait
{
    public function makeCoffee(): void
    {
        echo static::class . " is making coffee" . PHP_EOL;
    }
}