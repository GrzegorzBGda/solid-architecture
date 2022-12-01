<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator;

class FinancialReportResponse
{

    public function __construct(private array $reportData)
    {
    }

    public function setData(array $reportData): void
    {
        $this->reportData = $reportData;
    }

    public function getData(): array
    {
        return $this->reportData;
    }
}