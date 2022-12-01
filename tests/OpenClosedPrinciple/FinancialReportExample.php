<?php

declare(strict_types=1);

namespace OpenClosedPrinciple;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Controller\FinancialReportController;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Database\FinancialDataMapper;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialReportGenerator;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\PrintPresenter\PrintPresenter;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\ScreenPresenter\ScreenPresenter;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Views\PDFView\PDFView;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Views\WebView\WebView;

class FinancialReportExample extends TestCase
{
    public function testShouldCheckWebReportType(): void
    {
        $webPresenter = new ScreenPresenter(new WebView());

        $generator = new FinancialReportGenerator(new FinancialDataMapper());

        $controller = new FinancialReportController($generator, $webPresenter);
        self::assertEquals(
            "Web report created for year 2022 in compact mode", $controller->getReport(2022)
        );
    }

    public function testShouldCheckPDFReportType(): void
    {
        $webPresenter = new PrintPresenter(new PDFView());

        $generator = new FinancialReportGenerator(new FinancialDataMapper());

        $controller = new FinancialReportController($generator, $webPresenter);
        self::assertEquals(
            "PDF report created for year 2022 in A4 format", $controller->getReport(2022)
        );
    }
}