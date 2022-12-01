<?php

declare(strict_types=1);

namespace OpenClosedPrinciple;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Controller\FinancialReportController;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialReportGenerator;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\ScreenPresenter\ScreenPresenter;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Views\WebView\WebView;

class RightExamples extends TestCase
{
    public function testShouldCheckWebReportType(): void
    {
        $generator = new FinancialReportGenerator();
        $webPresenter = new ScreenPresenter(new WebView());

        $controller = new FinancialReportController($generator, $webPresenter);
        self::assertEquals(
            "Web report created for year 2022 in compact mode", $controller->getWebReport(2022)
        );
    }
}