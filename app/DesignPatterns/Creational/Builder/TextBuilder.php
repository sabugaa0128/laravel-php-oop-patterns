<?php

namespace App\DesignPatterns\Creational\Builder;
class TextBuilder implements IBuilder {

    private Message $message;

    public function make() : void
    {
        $this->message = new Message();
    }

    public function makeHeader() : void
    {
        $this->message->setPart(new Header("Header line"));
    }

    public function makeBody() : void
    {
        $this->message->setPart(new Body("Body line"));
    }

    public function makeFooter() : void
    {
        $this->message->setPart(new Footer("Footer line"));
    }

    public function getText() : Message
    {
        return $this->message;
    }
}
