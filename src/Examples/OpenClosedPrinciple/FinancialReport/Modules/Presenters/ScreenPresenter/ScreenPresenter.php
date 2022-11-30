<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\ScreenPresenter;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Controller\FinancialReportPresenter;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialReportResponse;

class ScreenPresenter implements FinancialReportPresenter
{
    private ScreenViewModel $model;

    public function __construct(private ScreenView $view)
    {
    }

    public function setResponse(FinancialReportResponse $response): void
    {
        $this->model = new ScreenViewModel($response);
    }

    public function createReport(): string
    {
        $this->view->setModel($this->model);
        return $this->view->createReportForWeb();
    }
}