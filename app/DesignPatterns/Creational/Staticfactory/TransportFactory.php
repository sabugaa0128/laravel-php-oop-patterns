<?php

namespace App\DesignPatterns\Creational\Staticfactory;
use App\DesignPatterns\Creational\Staticfactory\Cars;
use App\DesignPatterns\Creational\Staticfactory\Trucks;


class TransportFactory
{
    // Статическая фабрика
    public static function build($transportName)
    {
        $className = ucfirst($transportName);


            var_dump($className);
            return new $className();

    }
}

class Carss {
    public function __construct()
    {
    }
}
