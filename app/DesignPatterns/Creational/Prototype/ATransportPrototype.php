<?php

namespace App\DesignPatterns\Creational\Prototype;

abstract class ATransportPrototype {
    protected string $name;
    protected string $model;

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function setModel(string $model) : void
    {
        $this->model = $model;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getModel() : string
    {
        return $this->model;
    }

}
