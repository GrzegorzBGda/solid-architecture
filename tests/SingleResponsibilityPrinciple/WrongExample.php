<?php

declare(strict_types=1);

namespace SingleResponsibilityPrinciple;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Wrong\Employee;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Wrong\RegularHours;
use SolidEngineering\Examples\SingleResponsibilityPrinciple\Wrong\RegularHoursChangedForCOO;

class WrongExample extends TestCase
{
    public function testShouldCheckThatEmployeeMethodsReturnCorrectStrings(): void
    {

        $employee = new Employee(new RegularHours());

        /** CFO uses class Employee */
        self::assertEquals("calculatePay() executed using RegularHours class", $employee->calculatePay());
        self::assertEquals("reportHours() executed using RegularHours class", $employee->reportHours());
        self::assertEquals("save() executed using RegularHours class", $employee->save());

        /** COO orders change of class RegularHours shared by other methods */
        $employee = new Employee(new RegularHoursChangedForCOO());
        self::assertEquals("calculatePay() executed using RegularHoursChangedForCOO class", $employee->calculatePay());
        self::assertEquals("reportHours() executed using RegularHoursChangedForCOO class", $employee->reportHours());
        self::assertEquals("save() executed using RegularHoursChangedForCOO class", $employee->save());

        /** CTO uses class Employee */
        self::assertEquals("calculatePay() executed using RegularHours class", $employee->calculatePay());
        self::assertEquals("reportHours() executed using RegularHours class", $employee->reportHours());
        self::assertEquals("save() executed using RegularHours class", $employee->save());
    }
}