<?php

namespace App\DesignPatterns\Creational\Abstractfactory;

class ModernDesignFactory implements IAbstractFactory
{
    public static function makeDarkDesign() : IDarkDesign
    {
        return new ModernDarkDesign();
    }

    public static function makeLightDesign() : ILightDesign
    {
        return new ModernLightDesign();
    }
}
