<?php

namespace SolidEngineering\Examples\SingleResponsibilityPrinciple\Right;

class HourReporter
{

    public function __construct(private EmployeeData $employeeData)
    {
    }

    public function reportHours(): string
    {
        return "reportHours() executed";
    }
}