<?php

namespace App\DesignPatterns\Creational\Singleton;

final class Singleton {
    /**
     * Объект одиночки храниться в статичном поле класса.
     */
     private static ?self $_instance = null;
     // Test name
     private static string $name;

    /**
     * Класс Одиночка предоставляет метод `getInstance`, который ведёт себя как
     * альтернативный конструктор и позволяет клиентам получать один и тот же
     * экземпляр класса при каждом вызове.
     */
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
    /**
     * Одиночки не должны быть клонируемыми.
     */
    public function __clone(): void
    {
        // TODO: Implement __clone() method.
    }
    /**
     * Одиночки не должны быть восстанавливаемыми из строк.
     */
    public function __wakeup(): void
    {
        // TODO: Implement __wakeup() method.
        throw new \Exception("Cannot unserialize a singleton.");
    }
}
