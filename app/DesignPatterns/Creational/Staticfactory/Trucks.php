<?php

namespace App\DesignPatterns\Creational\Staticfactory;

class Trucks implements ITransport
{
    public function move(): string
    {
        // TODO: Implement move() method.
        return "Truck moving...";
    }
}
