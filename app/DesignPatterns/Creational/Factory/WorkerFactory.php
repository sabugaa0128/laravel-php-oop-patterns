<?php

namespace App\DesignPatterns\Creational\Factory;

class WorkerFactory {
    public static function make() : Worker
    {
        return new Worker();
    }
}
