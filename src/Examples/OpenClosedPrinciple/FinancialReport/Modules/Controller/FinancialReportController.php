<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Controller;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialReportGenerator;

class FinancialReportController
{

    public function __construct(private FinancialReportGenerator $generator, private FinancialReportPresenter $presenter)
    {
    }

    public function getReport(int $year): string
    {
        $reportRequest = $this->generator->createRequest();
        $reportRequest->setYear($year);
        $reportRequest->setType($this->presenter->getType());

        $response = $this->generator->requestReportData($reportRequest);

        $this->presenter->setResponse($response);
        return $this->presenter->createReport();
    }

}