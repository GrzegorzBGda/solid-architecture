<?php

namespace SolidEngineering\Examples\Other\LinkFinder\LinkFinder;

interface LinkFinderRepository
{
    public function getData(LinksToFind $linksToFind): array;
}