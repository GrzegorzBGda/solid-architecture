<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Views\PDFView;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\PrintPresenter\PrintView;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\PrintPresenter\PrintViewModel;

class PDFView implements PrintView
{
    private PrintViewModel $model;

    public function createReportForPDF(): string
    {
        $reportData = $this->model->getReportData();

        return
            $reportData['type']
            . ' ' . $reportData['report']
            . ' for year'
            . ' ' . $reportData['year']
            . ' in'
            . ' ' . $this->model->getMeta()['format']
            . ' format';
    }

    public function setModel(PrintViewModel $model): void
    {
        $this->model = $model;
    }

}