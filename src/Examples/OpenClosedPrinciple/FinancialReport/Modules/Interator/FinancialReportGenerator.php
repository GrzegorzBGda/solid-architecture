<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator;

class FinancialReportGenerator implements FinancialReportRequester
{
    public function __construct(private FinancialReportRequest $request)
    {
    }

    public function requestReportData(): FinancialReportResponse
    {
        return new FinancialReportResponse(
            ['report_data' => 'report for ' . $this->request->getType()]
        );
    }
}