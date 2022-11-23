<?php

namespace SolidEngineering\Examples\SingleResponsibilityPrinciple\Wrong;

class Employee
{

    public function __construct(private RegularHours $regularHours)
    {
    }

    public function calculatePay(): string
    {
        return "calculatePay() executed " . $this->regularHours->getRegularHours();
    }

    public function reportHours(): string
    {
        return "reportHours() executed " . $this->regularHours->getRegularHours();
    }

    public function save(): string
    {
        return "save() executed " . $this->regularHours->getRegularHours();
    }

}