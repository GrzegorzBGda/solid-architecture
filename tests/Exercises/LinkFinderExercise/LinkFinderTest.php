<?php

declare(strict_types=1);

namespace Exercise\LinkFinderExercise;

use PHPUnit\Framework\TestCase;
use SolidEngineering\Examples\Other\LinkFinderExercise\BlogClientApi;
use SolidEngineering\Examples\Other\LinkFinderExercise\Controller\LinkFinderController;
use SolidEngineering\Examples\Other\LinkFinderExercise\CSV\CSVPresenter;
use SolidEngineering\Examples\Other\LinkFinderExercise\CSVFrontView;
use SolidEngineering\Examples\Other\LinkFinderExercise\LinkFinder\LinkFinder;
use SolidEngineering\Examples\Other\LinkFinderExercise\Wordpress\WordpressBlogMapper;

class LinkFinderTest extends TestCase
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