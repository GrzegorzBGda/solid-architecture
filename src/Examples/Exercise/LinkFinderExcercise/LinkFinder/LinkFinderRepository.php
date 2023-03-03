<?php

namespace SolidEngineering\Examples\Other\LinkFinderExercise\LinkFinder;

interface LinkFinderRepository
{
    public function getData(LinksToFind $linksToFind): array;
}