<?php

namespace App\DesignPatterns\Structural\Composite;

use App\DesignPatterns\Structural\Composite\APart;
use App\DesignPatterns\Structural\Composite\IRenderable;

class Body extends APart implements IRenderable
{
    public function render(): string
    {
        return "Body - ".$this->getText();
    }

}
