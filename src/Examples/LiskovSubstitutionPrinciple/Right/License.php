<?php

namespace SolidEngineering\Examples\LiskovSubstitutionPrinciple\Right;

interface License
{
    public function calcFee(): float;
}