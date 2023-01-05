<?php
declare(strict_types=1);

namespace SolidEngineering\Examples\Other\LinkFinder\Wordpress;

use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinkFinderRepository;
use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinksToFind;

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