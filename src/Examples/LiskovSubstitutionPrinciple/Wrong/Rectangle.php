<?php

namespace SolidEngineering\Examples\LiskovSubstitutionPrinciple\Wrong;

class Rectangle
{
    private float $height;
    private float $width;

    public function setH(float $height): void
    {
        $this->height = $height;
    }

    public function setW(float $width): void
    {
        $this->width = $width;
    }

    public function getH(): float
    {
        return $this->height;
    }

    public function getW(): float
    {
        return $this->width;
    }
}