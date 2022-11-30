<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\ScreenPresenter;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialReportResponse;

class ScreenViewModel
{
    private array $data;

    public function __construct(FinancialReportResponse $response)
    {
        $this->getDataFromResponse($response);
    }

    private function getDataFromResponse(FinancialReportResponse $response): void
    {
        $this->data = $response->getReportData();
    }

    public function getReportData()
    {
        return $this->data['report_data'];
    }
}