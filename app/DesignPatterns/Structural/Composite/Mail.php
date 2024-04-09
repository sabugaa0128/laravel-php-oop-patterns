<?php

namespace App\DesignPatterns\Structural\Composite;

use App\DesignPatterns\Structural\Composite\IRenderable;

class Mail implements IRenderable
{
    // Parts of mail text
    private array $parts = [];
    public function render(): string
    {
        $result = '';

        foreach ($this->parts as $part)
        {
            $result .= $part->render();
        }

        return $result;
    }

    public function addPart(IRenderable $part)
    {
        $this->parts[] = $part;
    }
}
