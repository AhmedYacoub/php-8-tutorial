<?php

namespace App\Traits;


trait CappuccinoTrait
{    
    /**
     * makeCappuccino
     *
     * @return void
     */
    private function makeCappuccino(): void
    {
        echo static::class . " is making cappuccino" . PHP_EOL;
    }

    public function makeLatte(): void
    {
        echo 'Making latte from (CappuccinoTrait)' . PHP_EOL;
    }
}
