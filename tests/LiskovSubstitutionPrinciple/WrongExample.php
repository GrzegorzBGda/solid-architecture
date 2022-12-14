<?php

declare(strict_types=1);

namespace LiskovSubstitutionPrinciple;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\LiskovSubstitutionPrinciple\Wrong\User;
use SolidEngineering\Examples\LiskovSubstitutionPrinciple\Wrong\Rectangle;
use SolidEngineering\Examples\LiskovSubstitutionPrinciple\Wrong\Square;

class WrongExample extends TestCase
{
    public function testShouldCheckThatAreaIsCalculatedCorrectlyForRectangle(): void
    {
        $user = new User(new Rectangle());
        $user->setHeight(10);
        $user->setWidth(5);
        self::assertEquals(50, $user->area());
    }

    public function testShouldCheckThatAreaIsCalculatedCorrectlyForSquare(): void
    {
        $user = new User(new Square());
        $user->setHeight(10);
        $user->setWidth(5);
        self::assertEquals(100, $user->area());
    }
}