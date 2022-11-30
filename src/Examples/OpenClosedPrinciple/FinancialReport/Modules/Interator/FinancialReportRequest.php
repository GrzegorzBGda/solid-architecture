<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator;

use InvalidArgumentException;

class FinancialReportRequest
{
    private string $type;

    public function __construct(string $request)
    {
        $this->setType($request);
    }

    public function getType(): string
    {
        return $this->type;
    }

    private function setType(string $request): void
    {
        $this->type = match($request) {
            'for_web' => 'web',
            default => throw new InvalidArgumentException('Unknown type ' . $request)
        };
    }
}