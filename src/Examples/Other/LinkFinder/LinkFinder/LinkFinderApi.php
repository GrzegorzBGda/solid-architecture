<?php

namespace SolidEngineering\Examples\Other\LinkFinder\LinkFinder;

interface LinkFinderApi
{
    public function createLinksToFind(): LinksToFind;

    public function getLinksLocations(LinksToFind $linksToFind): LinksLocations;
}