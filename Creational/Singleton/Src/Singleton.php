<?php

namespace  Creational\Singleton\Src;

class Singleton
{
    private static $instance = null;

    private function __construct() { }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            return self::$instance = new static;
        }
        return self::$instance;
    }
}

