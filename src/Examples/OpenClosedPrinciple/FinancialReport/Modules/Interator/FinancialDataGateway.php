<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator;

interface FinancialDataGateway
{
    public function getFinancialEntities(FinancialReportRequest $request): FinancialEntities;
}