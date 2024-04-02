<?php

namespace App\DesignPatterns\Creational\Prototype;

use App\DesignPatterns\Creational\Prototype\ATransportPrototype;

class Cars extends ATransportPrototype
{
    protected string $name = "Cars";
    protected string $model = "BMW";
}
