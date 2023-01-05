<?php

namespace SolidEngineering\Examples\Other\LinkFinder\LinkFinder;

use SolidEngineering\Examples\Other\LinkFinder\Wordpress\WordpressApi;

class LinkFinder implements LinkFinderApi
{
    public function __construct(private LinkFinderRepository $linkFinderRepository)
    {
    }

    public function createLinksToFind(): LinksToFind
    {
        return new LinksToFind();
    }

    public function getLinksLocations(LinksToFind $linksToFind): LinksLocations
    {
        $linksLocations = new LinksLocations();
        $linksLocations->setLinksLocations($this->linkFinderRepository->getData($linksToFind));
        return $linksLocations;
    }
}