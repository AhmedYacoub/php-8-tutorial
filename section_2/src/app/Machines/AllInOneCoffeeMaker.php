<?php

namespace App\Machines;

use App\Traits\LatteTrait;
use App\Traits\CappuccinoTrait;

class AllInOneCoffeeMaker extends CoffeeMaker
{
    use LatteTrait {
        /* Aliasing trait methods */
        LatteTrait::makeLatte as makeOriginalLatte;
    }

    use CappuccinoTrait {
        /* Traits collision */
        // use makeLatte() method from CappuccinoTrait instead of makeLatte() method from LatteTrait.
        CappuccinoTrait::makeLatte insteadof LatteTrait;

        /* Changing makeCappuccino() accessability from private to public */
        CappuccinoTrait::makeCappuccino as public;
    }
}
