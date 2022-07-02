<?php

namespace App;

class PaymentProfile
{
    private int $id;

    public function __construct() {
        $this->id = rand();
    }

    public function getId(): int
    {
        return $this->id;
    }
}
