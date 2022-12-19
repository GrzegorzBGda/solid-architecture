<?php

declare(strict_types=1);

namespace DependencyInversionPrinciple;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\DependencyInversionPrinciple\Application;
use SolidEngineering\Examples\DependencyInversionPrinciple\Service;
use SolidEngineering\Examples\DependencyInversionPrinciple\ServiceFactoryImpl;

class DependencyInversionPrincipleExample extends TestCase
{
    public function testShouldCheckFactoryReturnsService(): void
    {
        $application = new Application(new ServiceFactoryImpl());
        $this->assertInstanceOf(Service::class, $application->makeSvc());
    }
}