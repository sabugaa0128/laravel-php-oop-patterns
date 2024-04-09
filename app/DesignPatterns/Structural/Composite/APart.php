<?php

namespace App\DesignPatterns\Structural\Composite;

abstract class APart
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getText() : string
    {
        return $this->text . PHP_EOL;
    }
}
