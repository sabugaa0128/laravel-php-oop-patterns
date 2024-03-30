<?php

namespace App\DesignPatterns\Creational\Staticfactory;

class Cars implements ITransport
{
    public function move(): string
    {
        return "Car moving...";
    }
}
