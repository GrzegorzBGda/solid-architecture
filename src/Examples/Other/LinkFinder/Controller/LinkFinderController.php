<?php

namespace SolidEngineering\Examples\Other\LinkFinder\Controller;

use SolidEngineering\Examples\Other\LinkFinder\ExampleHttpRequest;
use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinkFinderApi;

readonly class LinkFinderController
{

    public function __construct(private ExampleHttpRequest $request, private LinkFinderApi $linkFinder)
    {
    }

    public function getLinksLocations(): array
    {
        $linksToFind = $this->linkFinder->createLinksToFind();
        $linksToFind->setUrl($this->request->getUrl());
        $linksLocation = $this->linkFinder->getLinksLocations($linksToFind);

        return $linksLocation->getLinksLocations();
    }
}