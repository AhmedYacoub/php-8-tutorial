<?php

namespace App\Machines;

class FancyOven
{
    // Using composition instead of inheritance 
    // because FancyOven class does not inherit all
    // the functionalities of Toaster & ToasterPro classes
    // we need only to use toast() & toastWithBagel() methods
    // without inheriting anything from the previous mentioned classes.
    public function __construct(private ToasterPro $toaster)
    {
        
    }

    public function fry()
    {
        echo 'Frying.. <br/>';
    }

    public function addSlice(string $slice): void
    {
        $this->toaster->addSlice($slice);
    }

    public function toast()
    {
        $this->toaster->toast();
    }

    public function toastWithBagel()
    {
        $this->toaster->toastWithBagel();
    }
}