<?php

namespace App\DesignPatterns\Structural\Dependencyinjection;
class Controller {
    private ControllerConfiguration $controllerConfiguration;

    public function __construct(ControllerConfiguration $controllerConfiguration)
    {
        $this->controllerConfiguration = $controllerConfiguration;
    }

    /**
     * @return string
     */
    public function getConfiguration(): string
    {
        return $this->controllerConfiguration->getName().'@'.$this->controllerConfiguration->getAction();
    }
}
