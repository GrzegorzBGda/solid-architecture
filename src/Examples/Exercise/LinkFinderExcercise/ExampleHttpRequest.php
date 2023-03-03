<?php

namespace SolidEngineering\Examples\Other\LinkFinderExercise;

class ExampleHttpRequest
{
    private string $url;

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}