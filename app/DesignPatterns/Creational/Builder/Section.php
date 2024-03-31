<?php

namespace App\DesignPatterns\Creational\Builder;

class Section {
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function __toString(): string
    {
        return $this->text;
    }


}
