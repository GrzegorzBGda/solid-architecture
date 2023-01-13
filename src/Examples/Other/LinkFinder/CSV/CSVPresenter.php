<?php

namespace SolidEngineering\Examples\Other\LinkFinder\CSV;

use SolidEngineering\Examples\Other\LinkFinder\Controller\LinkResponsePresenter;
use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinksLocations;

class CSVPresenter implements LinkResponsePresenter
{
    private CSVViewModel $CSVViewModel;

    public function __construct(private CSVView $CSVFrontView)
    {
        $this->CSVViewModel = new CSVViewModel();
    }

    public function present(LinksLocations $linksLocations): string
    {
        $this->CSVViewModel->setLinksLocations($linksLocations);
        return $this->CSVFrontView->present($this->CSVViewModel->getData());
    }
}