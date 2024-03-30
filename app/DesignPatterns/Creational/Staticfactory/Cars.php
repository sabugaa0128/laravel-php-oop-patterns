<?php

namespace App\DesignPatterns\Creational\Staticfactory;

class Cars implements ITransport
{
    public function move(): string
    {
        // TODO: Implement move() method.
        return "Car moving...";
    }
}
