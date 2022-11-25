<?php

declare(strict_types=1);

namespace SingleResponsibilityPrinciple;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\EmployeeData;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\EmployeeSaver;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\HourReporter;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\PayCalculator;


class RightExample extends TestCase
{
    public function testShouldCheckThatEmployeeMethodsReturnCorrectStrings(): void
    {

        $employeeData = new EmployeeData();

        $payCalculator = new PayCalculator($employeeData);
        $hourReporter = new HourReporter($employeeData);
        $employeeSaver = new EmployeeSaver($employeeData);

        self::assertEquals("calculatePay() executed", $payCalculator->calculatePay());
        self::assertEquals("reportHours() executed", $hourReporter->reportHours());
        self::assertEquals("save() executed", $employeeSaver->save());
    }
}