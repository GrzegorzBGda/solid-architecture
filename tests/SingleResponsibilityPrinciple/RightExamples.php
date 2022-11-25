<?php

declare(strict_types=1);

namespace SingleResponsibilityPrinciple;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\Employee;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\EmployeeData;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\EmployeeFacade;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\Modules\EmployeeSaver;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\Modules\HourReporter;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Right\Modules\PayCalculator;


class RightExamples extends TestCase
{
    public function testShouldCheckThatSolutionIsWorkingCorrectly(): void
    {
        $employeeData = new EmployeeData();

        $payCalculator = new PayCalculator($employeeData);
        $hourReporter = new HourReporter($employeeData);
        $employeeSaver = new EmployeeSaver($employeeData);

        self::assertEquals("calculatePay() executed", $payCalculator->calculatePay());
        self::assertEquals("reportHours() executed", $hourReporter->reportHours());
        self::assertEquals("save() executed", $employeeSaver->save());
    }

    public function testShouldCheckThatSolutionUsingFacadeIsWorkingCorrectly(): void
    {
        $employeeFacade = new EmployeeFacade();
        self::assertEquals("calculatePay() executed", $employeeFacade->calculatePay());
        self::assertEquals("reportHours() executed", $employeeFacade->reportHours());
        self::assertEquals("save() executed", $employeeFacade->save());
    }

    public function testShouldCheckThatSolutionUsingClassIsWorkingCorrectly(): void
    {
        $employee = new Employee(new EmployeeData());
        self::assertEquals("calculatePay() executed", $employee->calculatePay());
        self::assertEquals("reportHours() executed", $employee->reportHours());
        self::assertEquals("save() executed", $employee->save());
    }
}