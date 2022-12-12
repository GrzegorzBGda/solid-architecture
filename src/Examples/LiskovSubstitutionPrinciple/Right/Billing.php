<?php

namespace SolidEngineering\Examples\LiskovSubstitutionPrinciple\Right;

class Billing
{
    public function __construct(private License $license)
    {
    }

    public function calculateFee(): float
    {
        return $this->license->calcFee();
    }
}