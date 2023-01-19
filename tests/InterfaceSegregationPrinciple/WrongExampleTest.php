<?php

declare(strict_types=1);

namespace InterfaceSegregationPrinciple;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\InterfaceSegregationPrinciple\Wrong\OPS;
use SolidEngineering\Examples\InterfaceSegregationPrinciple\Wrong\User1;
use SolidEngineering\Examples\InterfaceSegregationPrinciple\Wrong\User2;
use SolidEngineering\Examples\InterfaceSegregationPrinciple\Wrong\User3;

class WrongExampleTest extends TestCase
{
    public function testShouldCheckThatOPSMethodsReturnCorrectStrings(): void
    {
        $ops = new OPS();
        self::assertEquals("op1 executed", $ops->op1());
        self::assertEquals("op2 executed", $ops->op2());
        self::assertEquals("op3 executed", $ops->op3());
    }

    public function testShouldCheckIfUserMethodsReturnCorrectStrings(): void
    {
        $user1 = new User1();
        self::assertEquals("op1 executed", $user1->op1());

        $user2 = new User2();
        self::assertEquals("op2 executed", $user2->op2());

        $user3 = new User3();
        self::assertEquals("op3 executed", $user3->op3());
    }
}