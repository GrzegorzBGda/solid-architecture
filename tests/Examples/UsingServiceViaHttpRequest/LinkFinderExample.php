<?php

declare(strict_types=1);

namespace Examples\UsingServiceViaHttpRequest;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\Other\LinkFinder\Controller\LinkFinderController;
use SolidEngineering\Examples\Other\LinkFinder\ExampleHttpRequest;
use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinkFinder;
use SolidEngineering\Examples\Other\LinkFinder\Wordpress\WordpressApi;

class LinkFinderExample extends TestCase
{
    public function testShouldCheckUsingServiceViaHttpRequest(): void
    {
        $request = new ExampleHttpRequest();
        $request->setUrl('https://research.com/getLinks/blog');

        $linkFinderRepository = new WordpressApi();
        $linkFinder = new LinkFinder($linkFinderRepository);

        $controller = new LinkFinderController($request, $linkFinder);
        self::assertEquals(
            ['link1' => 'location1', 'link2' => 'location2', 'link3' => 'location3'],
            $controller->getLinksLocations()
        );
    }
}