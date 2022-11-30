<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Controller;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialReportResponse;

interface FinancialReportPresenter
{
    public function createReport(): string;

    public function setResponse(FinancialReportResponse $response): void;
}