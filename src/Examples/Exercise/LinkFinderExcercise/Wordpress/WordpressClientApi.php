<?php

namespace SolidEngineering\Examples\Other\LinkFinderExercise\Wordpress;

interface WordpressClientApi
{
    public function getBlogPosts(): array;
}