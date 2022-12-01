<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator;

interface FinancialReportRequester
{
    public function requestReportData(FinancialReportRequest $request): FinancialReportResponse;
}