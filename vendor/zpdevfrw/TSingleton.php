<?php


namespace zpdevfrw;

//TODO e7n: Патерн "Синглтон"
trait TSingleton
{
    //TODO e7n: Обнуляемые типы (PHP 7.1)
    private static ?self $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): static
    {
        return static::$instance ?? static::$instance = new static();
    }

}