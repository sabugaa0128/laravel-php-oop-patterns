<?php

namespace App\DesignPatterns\Creational\Abstractfactory;
class ClassicDesignFactory implements IAbstractFactory {

    public static function makeDarkDesign() : IDarkDesign
    {
        return new ClassicDarkDesign();
    }

    public static function makeLightDesign() : ILightDesign
    {
        return new ClassicLightDesign();
    }
}
