<?php
echo "<h1>Singleton Design Pattern</h1>";
echo "<h2><a href='../index.php'>Back</a></h2>";


class Singleton
{
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            echo("还没有初始化过实例,正在进行实例化<br>");
            return self::$instance = new static;
        }
        echo("已经实例化了对象,返回已有的对象<br>");
        return self::$instance;
    }
}

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();
$s3 = Singleton::getInstance();

var_dump($s1, $s2, $s3);

echo($s1 === $s2);
echo($s1 === $s3);
echo($s2 === $s3);


echo($s1 == $s2);
echo($s1 == $s3);
echo($s2 == $s3);
