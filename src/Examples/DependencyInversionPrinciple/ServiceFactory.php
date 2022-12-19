<?php

namespace SolidEngineering\Examples\DependencyInversionPrinciple;

interface ServiceFactory
{

    public function makeSvc(): Service;
}