<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\ScreenPresenter;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialReportResponse;

class ScreenViewModel
{
    private array $data;
    private array $meta;

    public function __construct(FinancialReportResponse $response)
    {
        $this->meta = ['mode' => 'compact'];
        $this->data = $response->getData();
    }

    public function getReportData()
    {
        return $this->data['report_data'];
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public function getMeta(): array
    {
        return $this->meta;
    }

    public function setMeta(array $meta): void
    {
        $this->meta = $meta;
    }
}