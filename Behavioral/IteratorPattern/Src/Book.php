<?php

namespace Behavioral\IteratorPattern\Src;

class Book
{
    private $name = '';

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function __construct($name='')
    {
        $this->name = $name ?: $this->str_random(random_int(4, 20));
    }

    public function printName()
    {
        echo "This book's name is {$this->name}" . PHP_EOL;
    }

    public static  function str_random($length = 10)
    {
        $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString     = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
