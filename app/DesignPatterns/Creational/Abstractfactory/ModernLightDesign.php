<?php

namespace App\DesignPatterns\Creational\Abstractfactory;
class ModernLightDesign implements ILightDesign {
    public function draw() : string
    {
        return "Draw modern light interface...";
    }
}
