<?php

namespace App\DesignPatterns\Creational\Singleton;

final class Singleton {

     private static ?self $_instance = null;
     // Test name
     private static string $name;

     // Create new object or return created object
     public static function getInstance() : self
     {
         if (self::$_instance === null) {
             self::$_instance = new self();
         }
         return self::$_instance;
     }
     // Setter
     public static function setName(string $name) : void
     {
        self::$name = $name;
     }
     // Getter
     public static function getName() : string
     {
         return self::$name;
     }

    public function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

    public function __wakeup(): void
    {
        // TODO: Implement __wakeup() method.
    }
}
