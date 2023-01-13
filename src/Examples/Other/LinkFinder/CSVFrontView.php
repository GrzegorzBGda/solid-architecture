<?php

namespace SolidEngineering\Examples\Other\LinkFinder;

use SolidEngineering\Examples\Other\LinkFinder\CSV\CSVView;

class CSVFrontView implements CSVView
{
    public function __construct()
    {
    }

    public function present(array $data): string
    {
        $csv = fopen('php://temp', 'r+');
        fputcsv($csv, $data['linksLocations']);
        rewind($csv);
        $csvContent = stream_get_contents($csv);
        fclose($csv);

        return str_replace("\n", "", $csvContent);
    }
}