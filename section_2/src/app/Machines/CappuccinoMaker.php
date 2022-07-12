<?php

namespace App\Machines;

use App\Traits\CappuccinoTrait;

class CappuccinoMaker extends CoffeeMaker
{
    use CappuccinoTrait {
        /* Changing makeCappuccino() accessability from private to public */
        CappuccinoTrait::makeCappuccino as public;
    }

    /* 
        Method precedence
        Overriding methods from traits results
        in using the overridden method.
    */
    public function makeCappuccino(): void
    {
        echo 'Making cappuccino (updated)' . PHP_EOL;
    }
}