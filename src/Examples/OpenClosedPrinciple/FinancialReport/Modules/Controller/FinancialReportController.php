<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Controller;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialReportGenerator;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialReportRequest;

class FinancialReportController
{

    public function __construct(
        private string                   $request,
        private FinancialReportPresenter $presenter
    )
    {
    }

    public function getReport(): string
    {
        $generator = new FinancialReportGenerator(new FinancialReportRequest($this->request));

        $this->presenter->setResponse($generator->requestReportData());
        return $this->presenter->createReport();
    }
}