<?php

namespace SolidEngineering\Examples\InterfaceSegregationPrinciple\Wrong2;

class User2 extends OPS
{
    public function businessLogicForUser2(): string
    {
        return $this->op2();
    }
}