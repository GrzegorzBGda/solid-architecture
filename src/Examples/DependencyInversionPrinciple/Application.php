<?php

namespace SolidEngineering\Examples\DependencyInversionPrinciple;
class Application
{
    private ?Service $service = null;

    public function __construct(private readonly ServiceFactory $factory)
    {

    }

    public function makeSvc(): Service
    {
        if (null === $this->service) {
            $this->service = $this->factory->makeSvc();
        }

        return $this->service;
    }
}