<?php
namespace App\DesignPatterns\Structural\Dependencyinjection;

 class ControllerConfiguration {
     private string $name;
     private string $action;

     public function __construct(string $name, string $action)
     {
         $this->name = $name;
         $this->action = $action;
     }

     /**
      * @return string
      */
     public function getName(): string
     {
         return $this->name;
     }

     /**
      * @return string
      */
     public function getAction(): string
     {
         return $this->action;
     }
 }
