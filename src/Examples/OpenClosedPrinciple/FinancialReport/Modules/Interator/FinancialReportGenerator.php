<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator;

class FinancialReportGenerator implements FinancialReportRequester
{
    const WEB_TYPE = 'web';

    public function __construct()
    {
    }

    public function requestReportData(FinancialReportRequest $request): FinancialReportResponse
    {
        return new FinancialReportResponse(
            ['report_data' => [
                'report' => 'report created',
                'year' => $request->getYear(),
                'type' => $request->getType()
            ]]
        );
    }

    public function getRequest(): FinancialReportRequest
    {
        return new FinancialReportRequest();
    }
}