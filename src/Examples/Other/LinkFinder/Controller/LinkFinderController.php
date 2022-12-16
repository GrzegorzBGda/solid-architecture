<?php

namespace SolidEngineering\Examples\Other\LinkFinder\Controller;

use SolidEngineering\Examples\Other\LinkFinder\ExampleHttpRequest;
use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinkFinderApi;
use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinksLocations;

class LinkFinderController
{

    public function __construct(private ExampleHttpRequest $request, private LinkFinderApi $linkFinder)
    {
    }

    public function getLinksLocations(): array
    {
        $linkToFind = $this->linkFinder->createLinksToFind();
        $linkToFind->setUrl($this->request->getUrl());
        $linksLocation = $this->linkFinder->getLinks($linkToFind);

        return $linksLocation->getLinksLocations();
    }
}