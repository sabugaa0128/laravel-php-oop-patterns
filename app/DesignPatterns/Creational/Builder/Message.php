<?php

namespace App\DesignPatterns\Creational\Builder;
class Message {
    private string $text = '';

    public function setPart($part) {
        $this->text .= $part . PHP_EOL;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
