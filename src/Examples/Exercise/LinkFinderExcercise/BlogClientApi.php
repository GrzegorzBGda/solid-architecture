<?php

namespace SolidEngineering\Examples\Other\LinkFinderExercise;

use SolidEngineering\Examples\Other\LinkFinderExercise\Wordpress\WordpressClientApi;

class BlogClientApi implements WordpressClientApi
{
    public function getBlogPosts(): array
    {
        return ['link1' => 'location1', 'link2' => 'location2', 'link3' => 'location3'];
    }
}