<?php


namespace zpdevfrw;

//TODO Education: Патерн "Синглтон"
trait TSingleton
{
    //TODO Education: Обнуляемые типы (PHP 7.4)
    private static ?self $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): static
    {
        return static::$instance ?? static::$instance = new static();
    }

}