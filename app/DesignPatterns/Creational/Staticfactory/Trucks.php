<?php

namespace App\DesignPatterns\Creational\Staticfactory;

class Trucks implements ITransport
{
    public function move(): string
    {
        return "Truck moving...";
    }
}
