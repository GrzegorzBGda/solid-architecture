<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator;

class FinancialReportResponse
{

    private array $data;

    public function __construct(array $reportData)
    {
        $this->data['report'] = $reportData['report'];
        $this->data['year'] = $reportData['year'];
        $this->data['type'] = $reportData['type'];
    }

    public function getData(): array
    {
        return $this->data;
    }
}