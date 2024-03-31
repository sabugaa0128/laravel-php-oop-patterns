<?php

namespace App\DesignPatterns\Creational\Builder;
use App\DesignPatterns\Creational\Builder\IBuilder;
class Operator
{
    public function make(IBuilder $builder) : Message
    {
        $builder->makeHeader();
        $builder->makeBody();
        $builder->makeFooter();

        return $builder->getText();
    }
}
