<?php

namespace SolidEngineering\Examples\Other\LinkFinder;

use SolidEngineering\Examples\Other\LinkFinder\Wordpress\WordpressClientApi;

class BlogClientApi implements WordpressClientApi
{
    public function getBlogPosts(): array
    {
        return ['link1' => 'location1', 'link2' => 'location2', 'link3' => 'location3'];
    }
}