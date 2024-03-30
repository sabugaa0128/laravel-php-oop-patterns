<?php

namespace App\DesignPatterns\Creational\Staticfactory;
use InvalidArgumentException;

class TransportFactory
{
    // Статическая фабрика
    public static function build($transportName) : ?ITransport
    {
        $className = ucfirst($transportName);
        $class_path = '\\App\\DesignPatterns\\Creational\\Staticfactory\\' . $className;

        if (class_exists($class_path))
        {
            return new $class_path;
        }
        throw new InvalidArgumentException("Class: $className does not exist...");

    }
}
