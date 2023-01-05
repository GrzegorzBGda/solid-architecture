<?php

declare(strict_types=1);

namespace Examples\LinkFinder;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\Other\LinkFinder\BlogClientApi;
use SolidEngineering\Examples\Other\LinkFinder\Controller\LinkFinderController;
use SolidEngineering\Examples\Other\LinkFinder\ExampleHttpRequest;
use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinkFinder;
use SolidEngineering\Examples\Other\LinkFinder\Wordpress\WordpressBlogMapper;

class LinkFinderExample extends TestCase
{
    public function testShouldCheckUsingServiceViaHttpRequest(): void
    {
        $request = new ExampleHttpRequest();
        $request->setUrl('https://research.com/getLinks/blog');

        $linkFinderRepository = new WordpressBlogMapper(new BlogClientApi());
        $linkFinder = new LinkFinder($linkFinderRepository);

        $controller = new LinkFinderController($request, $linkFinder);
        self::assertEquals(
            ['link1' => 'location1', 'link2' => 'location2', 'link3' => 'location3'],
            $controller->getLinksLocations()
        );
    }
}