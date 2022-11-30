<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\ScreenPresenter;

interface ScreenView
{
    public function createReportForWeb(): string;

    public function setModel(ScreenViewModel $model): void;
}