<?php

namespace SolidEngineering\Examples\InterfaceSegregationPrinciple\Wrong;

class User3 extends OPS
{
    public function businessLogicForUser3(): string
    {
        return $this->op3();
    }
}