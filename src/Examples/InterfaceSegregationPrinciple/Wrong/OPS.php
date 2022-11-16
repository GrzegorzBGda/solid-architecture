<?php

namespace SolidEngineering\Examples\InterfaceSegregationPrinciple\Wrong;

class OPS
{
    public function op1(): string
    {
        return "op1 executed";
    }

    public function op2(): string
    {
        return "op2 executed";
    }

    public function op3(): string
    {
        return "op3 executed";
    }
}