<?php
declare(strict_types=1);

namespace SolidEngineering\Examples\Other\LinkFinder\Wordpress;

use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinkFinderRepository;
use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinksToFind;

class WordpressBlogMapper implements LinkFinderRepository
{
    public function getData(LinksToFind $linksToFind): array
    {
        return ['link1' => 'location1', 'link2' => 'location2', 'link3' => 'location3'];
    }
}