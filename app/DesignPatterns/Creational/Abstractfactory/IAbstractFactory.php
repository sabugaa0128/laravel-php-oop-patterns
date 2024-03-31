<?php

namespace App\DesignPatterns\Creational\Abstractfactory;
interface IAbstractFactory {
    public static function makeDarkDesign() : IDarkDesign;

    public static function makeLightDesign() : ILightDesign;
}
