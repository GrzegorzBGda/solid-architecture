<?php

namespace SolidEngineering\Examples\InterfaceSegregationPrinciple\Wrong2;

class User3 implements OPSInterface
{
    public function op1(): string
    {
        // TODO: Implement op1() method.
    }

    public function op2(): string
    {
        // TODO: Implement op2() method.
    }

    public function op3(): string
    {
        return "op3 executed";
    }
}