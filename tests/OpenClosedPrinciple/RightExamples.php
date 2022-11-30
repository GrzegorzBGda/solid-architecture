<?php

declare(strict_types=1);

namespace OpenClosedPrinciple;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Controller\FinancialReportController;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\ScreenPresenter\ScreenPresenter;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Views\WebView\WebView;

class RightExamples extends TestCase
{
    public function testShouldCheckWebReportType(): void
    {
        $presenter = new ScreenPresenter(new WebView());

        $controller = new FinancialReportController('for_web', $presenter);
        self::assertEquals("report for web crated in WebView", $controller->getReport());
    }
}