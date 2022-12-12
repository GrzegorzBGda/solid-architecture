<?php

namespace SolidEngineering\Examples\LiskovSubstitutionPrinciple\Right;

class BusinessLicense implements License
{
    private int $users = 5;

    public function calcFee(): float
    {
        return 20.0 * $this->users;
    }
}