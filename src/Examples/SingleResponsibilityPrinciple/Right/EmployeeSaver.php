<?php

namespace SolidEngineering\Examples\SingleResponsibilityPrinciple\Right;

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