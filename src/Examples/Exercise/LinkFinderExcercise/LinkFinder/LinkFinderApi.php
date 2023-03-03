<?php

namespace SolidEngineering\Examples\Other\LinkFinderExercise\LinkFinder;

interface LinkFinderApi
{
    public function createLinksToFind(): LinksToFind;

    public function getLinksLocations(LinksToFind $linksToFind): LinksLocations;
}