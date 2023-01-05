<?php

namespace SolidEngineering\Examples\Other\LinkFinder\Wordpress;

interface WordpressClientApi
{
    public function getBlogPosts(): array;
}