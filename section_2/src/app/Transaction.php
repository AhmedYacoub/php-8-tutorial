<?php

declare(strict_types=1);

class Transaction
{
    /* // Defining class properties (class variables)
    // 1. by defining accessor-modifier (public/protected/private)
    // 2. and data type (optional)
    // 3. property name
    */
    private ?Customer $customer = null;
    
    /* Constructor Property Promotion */
    // defines class properties (will be initialized) 
    // as constructor parameters
    // instead of defining properties, pass initialization values
    // as constructor params, then assign those values to properties
    public function __construct(
        private ?float $amount,
        private ?string $description
    ) {
        /* code.. */
    }

    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * $rate / 100;

        return $this;
    }

    public function applyDiscount(float $rate): Transaction
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
    
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function __destruct()
    {
        // echo 'Object reference destructed!';
    }
}
