<?php
declare(strict_types=1);

namespace SolidEngineering\Examples\Other\LinkFinderExercise\Wordpress;

use SolidEngineering\Examples\Other\LinkFinderExercise\LinkFinder\LinkFinderRepository;
use SolidEngineering\Examples\Other\LinkFinderExercise\LinkFinder\LinksToFind;

readonly class WordpressBlogMapper implements LinkFinderRepository
{
    public function __construct(private WordpressClientApi $blogClientApi)
    {
    }

    public function getData(LinksToFind $linksToFind): array
    {
        return $this->blogClientApi->getBlogPosts();
    }
}