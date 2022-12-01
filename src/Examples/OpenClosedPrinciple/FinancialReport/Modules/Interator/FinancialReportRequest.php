<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator;

class FinancialReportRequest
{
    private int $year;
    private string $type;

    public function __construct()
    {
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}