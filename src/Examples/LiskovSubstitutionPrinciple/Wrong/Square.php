<?php

namespace SolidEngineering\Examples\LiskovSubstitutionPrinciple\Wrong;

class Square extends Rectangle
{
    public function setSide(float $side): void
    {
        $this->setH($side);
        $this->setW($side);
    }
}