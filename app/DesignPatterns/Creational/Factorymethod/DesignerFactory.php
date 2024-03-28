<?php

namespace App\DesignPatterns\Creational\Factorymethod;

class DesignerFactory implements IWorkerFactoryMethod
{
    public static function make() : IWorker
    {
        return new Designer();
    }
}
