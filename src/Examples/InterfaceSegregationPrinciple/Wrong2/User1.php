<?php

namespace SolidEngineering\Examples\InterfaceSegregationPrinciple\Wrong2;

class User1 implements OPSInterface
{

    public function op1(): string
    {
        return "op1 executed";
    }

    public function op2(): string
    {
        // TODO: Implement op2() method.
    }

    public function op3(): string
    {
        // TODO: Implement op3() method.
    }
}