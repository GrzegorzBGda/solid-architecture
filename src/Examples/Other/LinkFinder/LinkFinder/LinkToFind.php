<?php

namespace SolidEngineering\Examples\Other\LinkFinder\LinkFinder;

class LinkToFind
{
    private string $url;

    public function setUrl(string $getUrl): void
    {
        $this->url = $getUrl;
    }
}