<?php

namespace Behavioral\NullObjectPattern\Src;

/**
 * Class User
 */
class User
{
    private $name;
    private $sex;

    public function __construct($name = '', $sex = 'male')
    {
        $this->name = $name;
        $this->sex  = $sex;
    }

    public function saySelf()
    {
        echo "My name is:" . $this->name.PHP_EOL;
    }
}

