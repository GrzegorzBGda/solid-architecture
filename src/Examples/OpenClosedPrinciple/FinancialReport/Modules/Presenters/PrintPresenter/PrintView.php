<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\PrintPresenter;

interface PrintView
{
    public function createReportForPDF(): string;

    public function setModel(PrintViewModel $model): void;
}