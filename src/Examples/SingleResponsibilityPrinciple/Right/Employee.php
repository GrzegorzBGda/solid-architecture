<?php

namespace SolidEngineering\Examples\SingleResponsibilityPrinciple\Right;

use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\Modules\EmployeeSaver;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\Modules\HourReporter;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\Modules\PayCalculator;

class Employee
{
    private PayCalculator $payCalculator;
    private HourReporter $hourReporter;
    private EmployeeSaver $employeeSaver;

    public function __construct(private EmployeeData $employeeData)
    {
        $this->payCalculator = new PayCalculator($this->employeeData);
        $this->hourReporter = new HourReporter($this->employeeData);
        $this->employeeSaver = new EmployeeSaver($this->employeeData);
    }

    public function reportHours(): string
    {
        return $this->hourReporter->reportHours();
    }

    public function calculatePay(): string
    {
        return $this->payCalculator->calculatePay();
    }

    public function save(): string
    {
        return $this->employeeSaver->save();
    }
}