<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Views\WebView;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\ScreenPresenter\ScreenView;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\ScreenPresenter\ScreenViewModel;

class WebView implements ScreenView
{
    private ScreenViewModel $model;

    public function createReportForWeb(): string
    {
        return $this->model->getReportData() . " crated in WebView";
    }

    public function setModel(ScreenViewModel $model): void
    {
        $this->model = $model;
    }
}