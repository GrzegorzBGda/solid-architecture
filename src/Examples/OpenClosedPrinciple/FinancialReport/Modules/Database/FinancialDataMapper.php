<?php

namespace SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Database;

use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialDataGateway;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialEntities;
use SolidEngineering\Examples\OpenClosedPrinciple\FinancialReport\Modules\Interator\FinancialReportRequest;

class FinancialDataMapper implements FinancialDataGateway
{
    private FinancialDatabase $database;

    public function __construct()
    {
        $this->database = new FinancialDatabase();
    }

    public function getFinancialEntities(FinancialReportRequest $request): FinancialEntities
    {
        $entity = $this->database->getFinancialEntities();
        $entity->data['report'] = 'report created';
        $entity->data['year'] = $request->getYear();
        $entity->data['type'] = $request->getType();
        $entity->data['created_at'] = date("Y-m-d H:m");

        return $entity;
    }
}