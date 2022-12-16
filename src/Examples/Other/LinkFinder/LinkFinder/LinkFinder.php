<?php

namespace SolidEngineering\Examples\Other\LinkFinder\LinkFinder;

use SolidEngineering\Examples\Other\LinkFinder\Wordpress\WordpressApi;

class LinkFinder implements LinkFinderApi
{
    public function __construct(WordpressApi $linkFinderRepository)
    {
    }

    public function createLinksToFind(): LinkToFind
    {
        return new LinkToFind();
    }

    public function getLinks(LinkToFind $linkToFind): LinksLocations
    {
        return new LinksLocations();
    }
}