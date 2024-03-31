<?php

namespace App\DesignPatterns\Creational\Abstractfactory;
class ClassicDarkDesign implements IDarkDesign {
    public function draw() : string
    {
        return "Draw classic dark interface...";
    }
}
