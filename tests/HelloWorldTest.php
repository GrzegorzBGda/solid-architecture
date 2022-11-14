<?php

declare(strict_types=1);

use SolidEngineering\Examples\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testShouldCheckIfBasketContainsAllNecessaryFields(): void
    {
        $example = new HelloWorld();
        self::assertEquals("Hello World!", $example->getHelloWorld(), "sayHello() method is returning wrong string");
    }
}