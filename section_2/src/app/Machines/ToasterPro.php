<?php

namespace App\Machines;

class ToasterPro extends Toaster
{
    // Property overriding: only overrides public/protected/constants properties
    // private properties can not be overridden.


    // Overriding parent (Toaster) $size public property.
    protected int $size;

    // constructor overriding
    public function __construct() {
        parent::__construct();
        $this->size = 4;
    }
    
    // Methods overriding
    public function addSlice(string $slice): void
    {
        $slice = "{$slice} *toaster pro* ";
        parent::addSlice($slice);
    }

    public function toastWithBagel(): void
    {
        foreach ($this->slices as $index => $slice) {
            echo ($index + 1) . ": Toasting {$slice} with bagel" . "<br />";

            // array_splice($this->slices, $index);
        }
    }
}
