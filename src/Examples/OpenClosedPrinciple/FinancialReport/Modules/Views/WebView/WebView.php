<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Views\WebView;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\ScreenPresenter\ScreenView;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\ScreenPresenter\ScreenViewModel;

class WebView implements ScreenView
{
    private ScreenViewModel $model;

    public function createReportForWeb(): string
    {
        $reportData = $this->model->getReportData();

        return
            ucfirst($reportData['type'])
            . ' ' . $reportData['report']
            . ' for year'
            . ' ' . $reportData['year']
            . ' in'
            . ' ' . $this->model->getMeta()['mode']
            . ' mode';
    }

    public function setModel(ScreenViewModel $model): void
    {
        $this->model = $model;
    }
}