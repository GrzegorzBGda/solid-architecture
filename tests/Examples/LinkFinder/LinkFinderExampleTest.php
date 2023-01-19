<?php

declare(strict_types=1);

namespace Examples\LinkFinder;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\Other\LinkFinder\BlogClientApi;
use SolidEngineering\Examples\Other\LinkFinder\Controller\LinkFinderController;
use SolidEngineering\Examples\Other\LinkFinder\CSV\CSVPresenter;
use SolidEngineering\Examples\Other\LinkFinder\CSVFrontView;
use SolidEngineering\Examples\Other\LinkFinder\ExampleHttpRequest;
use SolidEngineering\Examples\Other\LinkFinder\LinkFinder\LinkFinder;
use SolidEngineering\Examples\Other\LinkFinder\Wordpress\WordpressBlogMapper;

class LinkFinderExampleTest extends TestCase
{
    public function testShouldCheckUsingServiceViaHttpRequest(): void
    {
        $request = new ExampleHttpRequest();
        $request->setUrl('https://research.com/getLinks/blog');

        $linkFinderRepository = new WordpressBlogMapper(new BlogClientApi());
        $linkFinder = new LinkFinder($linkFinderRepository);

        $linkResponsePresenter = new CSVPresenter(new CSVFrontView());

        $controller = new LinkFinderController($request, $linkFinder, $linkResponsePresenter);
        self::assertEquals(
            'location1,location2,location3',
            $controller->getLinksLocations()
        );
    }
}