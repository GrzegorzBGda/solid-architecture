<?php

namespace SolidEngineering\Examples\SingleResponsibilityPrinciple\Right;

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