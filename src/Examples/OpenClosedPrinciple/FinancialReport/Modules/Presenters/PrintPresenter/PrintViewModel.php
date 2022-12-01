<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Presenters\PrintPresenter;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialReportResponse;

class PrintViewModel
{
    private array $data;
    private array $meta;

    public function __construct(FinancialReportResponse $response)
    {
        $this->meta = ['format' => 'A4'];
        $this->data = $response->getData();
    }

    public function getReportData(): array
    {
        return $this->data;
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