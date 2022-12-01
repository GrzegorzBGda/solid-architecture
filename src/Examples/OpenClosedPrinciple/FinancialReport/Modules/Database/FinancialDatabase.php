<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Database;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialEntities;

class FinancialDatabase
{

    public function getFinancialEntities(): FinancialEntities
    {
        return new FinancialEntities();
    }
}