<?php

namespace SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\Modules;

use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\EmployeeData;

class EmployeeSaver
{
    public function __construct(private EmployeeData $employeeData)
    {
    }

    public function save(): string
    {
        return "save() executed";
    }
}