<?php

namespace SolidEngineering\Examples\SingleResponsibilityPrinciple\Wrong;

class RegularHoursChangedForCOO extends RegularHours
{

    public function getRegularHours(): string
    {
        return "using RegularHoursChangedForCOO class";
    }
}