<?php
/**
 * Created by PhpStorm.
 * User: sui
 * Date: 2017/10/26
 * Time: 14:17
 */

namespace Creational\Singleton\Src;


class SingletonSqlConnection
{
    private static $connection = null;

    private function __construct() { }

    public static function getConnection()
    {
        if (is_null(self::$connection)) {
            return self::$connection = mysqli_connect('localhost','root','','fuliji');
        }
        return self::$connection;
    }
}