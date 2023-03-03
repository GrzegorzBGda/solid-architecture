<?php

namespace SolidEngineering\Examples\Other\LinkFinderExercise\Controller;

use SolidEngineering\Examples\Other\LinkFinderExercise\ExampleHttpRequest;
use SolidEngineering\Examples\Other\LinkFinderExercise\LinkFinder\LinkFinderApi;

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