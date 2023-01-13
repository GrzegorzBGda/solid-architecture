<?php

namespace SolidEngineering\Examples\Other\LinkFinder\Controller;

use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinksLocations;

interface LinkResponsePresenter
{
    public function present(LinksLocations $linksLocations): string;
}