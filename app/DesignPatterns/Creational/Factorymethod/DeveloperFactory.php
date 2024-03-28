<?php

namespace App\DesignPatterns\Creational\Factorymethod;

class DeveloperFactory implements IWorkerFactoryMethod
{

    public static function make() : IWorker
    {
        return new Developer();
    }
}
