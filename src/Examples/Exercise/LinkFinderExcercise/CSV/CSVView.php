<?php

namespace SolidEngineering\Examples\Other\LinkFinderExercise\CSV;

interface CSVView
{
    public function present(array $data): string;
}