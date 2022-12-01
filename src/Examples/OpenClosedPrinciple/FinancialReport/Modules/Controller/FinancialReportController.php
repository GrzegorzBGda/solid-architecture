<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Controller;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialReportGenerator;

class FinancialReportController
{

    public function __construct(private FinancialReportGenerator $generator, private FinancialReportPresenter $presenter)
    {
    }

    public function getWebReport(int $year): string
    {
        $request = $this->generator->getRequest();
        $request->setYear($year);
        $request->setType(FinancialReportGenerator::WEB_TYPE);

        $response = $this->generator->requestReportData($request);

        $this->presenter->setResponse($response);
        return $this->presenter->createReport();
    }

}