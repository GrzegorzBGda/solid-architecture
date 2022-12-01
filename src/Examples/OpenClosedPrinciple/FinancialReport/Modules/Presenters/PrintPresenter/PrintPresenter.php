<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\PrintPresenter;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Controller\FinancialReportPresenter;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialReportResponse;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\ScreenPresenter\ScreenView;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\ScreenPresenter\ScreenViewModel;

class PrintPresenter implements FinancialReportPresenter
{
    private PrintViewModel $model;
    private string $type = 'PDF';

    public function __construct(private PrintView $view)
    {
    }

    public function setResponse(FinancialReportResponse $response): void
    {
        $this->model = new PrintViewModel($response);
    }

    public function createReport(): string
    {
        $this->view->setModel($this->model);
        return $this->view->createReportForPDF();
    }

    public function getType(): string
    {
        return $this->type;
    }
}