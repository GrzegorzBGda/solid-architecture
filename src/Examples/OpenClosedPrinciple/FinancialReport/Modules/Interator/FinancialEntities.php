<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator;

class FinancialEntities
{
    public array $data = [
        'report' => null,
        'year' => null,
        'type' => null,
        'created_at' => null,
        'deleted_at' => null,
    ];

    public function getData(): array
    {
        return $this->data;
    }
}