<?php

namespace SolidEngineering\Examples\Other\LinkFinderExercise\LinkFinder;

use SolidEngineering\Examples\Other\LinkFinderExercise\Wordpress\WordpressClientApi;

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