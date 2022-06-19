<?php

class Customer
{
    private ?PaymentProfile $paymentProfile = null;

    public function setPaymentProfile(PaymentProfile $paymentProfile): void
    {
        $this->paymentProfile = $paymentProfile;
    }

    public function getPaymentProfile(): ?PaymentProfile
    {
        return $this->paymentProfile;
    }
}