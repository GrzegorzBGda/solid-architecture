<?php

namespace SolidEngineering\Examples\Other\LinkFinder\LinkFinder;

class LinksLocations
{
    private array $linksLocations = ['link1' => 'location1', 'link2' => 'location2', 'link3' => 'location3'];

    public function getLinksLocations(): array
    {
        return $this->linksLocations;
    }

    public function setLinksLocations(array $getData): void
    {
        $this->linksLocations = $getData;
    }
}