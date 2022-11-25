<?php

namespace SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\Modules;

use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\EmployeeData;

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