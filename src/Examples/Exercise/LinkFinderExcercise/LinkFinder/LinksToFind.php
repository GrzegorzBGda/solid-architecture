<?php

namespace SolidEngineering\Examples\Other\LinkFinderExercise\LinkFinder;

class LinksToFind
{
    private string $url;

    public function setUrl(string $getUrl): void
    {
        $this->url = $getUrl;
    }
}