<?php

namespace SolidEngineering\Examples\DependencyInversionPrinciple;

class ServiceFactoryImpl implements ServiceFactory
{

    public function __construct()
    {
    }

    public function makeSvc(): Service
    {
        return new ConcreteServiceImpl();
    }
}