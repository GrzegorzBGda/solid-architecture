<?php

declare(strict_types=1);

namespace LiskovSubstitutionPrinciple;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\LiskovSubstitutionPrinciple\Right\Billing;
use SolidEngineering\Examples\LiskovSubstitutionPrinciple\Right\PersonalLicense;
use SolidEngineering\Examples\LiskovSubstitutionPrinciple\Right\BusinessLicense;

class RightExampleTest extends TestCase
{
    public function testShouldCheckThatBillingCanUsePersonalLicense(): void
    {
        $billing = new Billing(new PersonalLicense());
        self::assertEquals(10.0, $billing->calculateFee());

    }

    public function testShouldCheckThatBillingCanUseBusinessLicense()
    {
        $billing = new Billing(new BusinessLicense());
        self::assertEquals(100.0, $billing->calculateFee());
    }
}