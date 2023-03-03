<?php

namespace SolidEngineering\Examples\Other\LinkFinderExercise\Controller;

use SolidEngineering\Examples\Other\LinkFinderExercise\LinkFinder\LinksLocations;

interface LinkResponsePresenter
{
    public function present(LinksLocations $linksLocations): string;
}