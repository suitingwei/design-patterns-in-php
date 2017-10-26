<?php

namespace Creational\Singleton\Src;


class SqlConnection
{
    public function __construct()
    {
        return mysqli_connect('localhost','root','','fuliji');
    }
}