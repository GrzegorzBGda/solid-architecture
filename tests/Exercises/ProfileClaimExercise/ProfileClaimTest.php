<?php

declare(strict_types=1);

namespace Exercises\ProfileClaimExercise;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\Exercise\ProfileClaimExercise\Request\Request;
use SolidEngineering\Examples\Exercise\ProfileClaimExercise\Controller\ProfileClaimController;

class ProfileClaimTest extends TestCase
{
    public function testShouldCheckUsingServiceViaHttpRequest(): void
    {
        $request = new Request();
        $controller = new ProfileClaimController($request);

        self::assertEquals();
    }
}