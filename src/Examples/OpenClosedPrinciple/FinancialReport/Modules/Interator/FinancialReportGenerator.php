<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator;

class FinancialReportGenerator implements FinancialReportRequester
{
    public function __construct(private FinancialDataGateway $financialDataMapper)
    {
    }

    public function requestReportData(FinancialReportRequest $request): FinancialReportResponse
    {
        $financialData = $this->financialDataMapper->getFinancialEntities($request);
        return new FinancialReportResponse($financialData->getData());
    }

    public function createRequest(): FinancialReportRequest
    {
        return new FinancialReportRequest();
    }
}