<?php

namespace SolidEngineering\Examples\LiskovSubstitutionPrinciple\Wrong;

class User
{
    private Rectangle $rectangle;

    public function __construct(Rectangle $rectangle)
    {
        $this->rectangle = $rectangle;
    }

    public function setHeight(float $height): void
    {
        $this->rectangle->setH($height);
    }

    public function setWidth(float $width): void
    {
        $this->rectangle->setW($width);
    }

    public function area(): float
    {
        //this if means that Rectangle and Square are not interchangeable
        if ($this->rectangle instanceof Square) {
            return $this->rectangle->getH() * $this->rectangle->getH();
        }

        return $this->rectangle->getH() * $this->rectangle->getW();
    }
}