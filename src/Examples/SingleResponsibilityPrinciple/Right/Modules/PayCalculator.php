<?php

namespace SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\Modules;

use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\EmployeeData;

class PayCalculator
{
    public function __construct(private EmployeeData $employeeData)
    {
    }

    public function calculatePay(): string
    {
        return "calculatePay() executed";
    }
}