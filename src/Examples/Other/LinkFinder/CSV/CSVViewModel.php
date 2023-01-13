<?php

namespace SolidEngineering\Examples\Other\LinkFinder\CSV;

use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinksLocations;

class CSVViewModel
{
    private LinksLocations $linksLocations;
    private array $additionalData = ['additionalData' => '11235813'];

    public function setLinksLocations(LinksLocations $linksLocations): void
    {
        $this->linksLocations = $linksLocations;
    }

    public function getData(): array
    {
        return [
            'additionalData' => $this->additionalData,
            'linksLocations' => $this->linksLocations->getLinksLocations(),
        ];
    }
}