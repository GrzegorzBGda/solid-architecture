<?php

namespace SolidEngineering\Examples\Other\LinkFinder\CSV;

interface CSVView
{
    public function present(array $data): string;
}