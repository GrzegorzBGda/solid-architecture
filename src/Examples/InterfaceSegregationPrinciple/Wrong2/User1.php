<?php

namespace SolidEngineering\Examples\InterfaceSegregationPrinciple\Wrong2;

class User1 extends OPS
{
    public function businessLogicForUser1(): string
    {
        return $this->op1();
    }
}