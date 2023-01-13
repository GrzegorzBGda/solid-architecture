<?php

namespace SolidEngineering\Examples\Other\LinkFinder\Controller;

use SolidEngineering\Examples\Other\LinkFinder\ExampleHttpRequest;
use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinkFinderApi;

readonly class LinkFinderController
{

    public function __construct(private ExampleHttpRequest $request, private LinkFinderApi $linkFinder, private LinkResponsePresenter $linkResponsePresenter)
    {
    }

    public function getLinksLocations(): string
    {
        $linksToFind = $this->linkFinder->createLinksToFind();
        $linksToFind->setUrl($this->request->getUrl());
        $linksLocation = $this->linkFinder->getLinksLocations($linksToFind);

        return $this->linkResponsePresenter->present($linksLocation);
    }
}