<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator;

class FinancialReportResponse
{

    public function __construct(public array $reportData)
    {
    }

    public function getReportData(): array
    {
        return $this->reportData;
    }
}