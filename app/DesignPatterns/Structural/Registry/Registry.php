<?php

namespace App\DesignPatterns\Structural\Registry;
abstract class Registry {
    private static array $services = [];

    final public static function setService($key, Service $service) :void
    {
        self::$services[$key] = $service;
    }

    final public static function getKey($key) : string|Service
    {
        if (isset(self::$services[$key]))
        {
           return self::$services[$key];
        }
        return "This service is not exists!";
    }

}
