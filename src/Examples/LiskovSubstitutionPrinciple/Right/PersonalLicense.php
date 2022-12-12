<?php

namespace SolidEngineering\Examples\LiskovSubstitutionPrinciple\Right;

class PersonalLicense implements License
{
    public function calcFee(): float
    {
        return 10.0;
    }
}