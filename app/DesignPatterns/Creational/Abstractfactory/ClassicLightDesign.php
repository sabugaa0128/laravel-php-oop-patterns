<?php

namespace App\DesignPatterns\Creational\Abstractfactory;
class ClassicLightDesign implements ILightDesign {
    public function draw() : string
    {
        return "Draw classic light interface...";
    }
}
