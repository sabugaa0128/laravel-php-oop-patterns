<?php

namespace App\DesignPatterns\Creational\Abstractfactory;
class ModernDarkDesign implements IDarkDesign {
    public function draw() : string
    {
        return "Draw modern dark interface...";
    }
}
