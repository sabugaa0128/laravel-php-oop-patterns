<?php

namespace App\DesignPatterns\Creational\Builder;

interface IBuilder
{
    public function makeHeader();

    public function makeBody();

    public function makeFooter();

    public function getText();

}
