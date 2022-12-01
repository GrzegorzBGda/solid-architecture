<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator;

interface FinancialReportRequester
{
    public function createRequest(): FinancialReportRequest;

    public function requestReportData(FinancialReportRequest $request): FinancialReportResponse;
}