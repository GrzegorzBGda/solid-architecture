<?php

namespace SolidEngineering\Examples\InterfaceSegregationPrinciple\Wrong;

class User2 extends OPS
{
    public function businessLogicForUser2(): string
    {
        return $this->op2();
    }
}