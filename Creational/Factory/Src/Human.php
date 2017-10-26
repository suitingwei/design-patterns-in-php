<?php
/**
 * Created by PhpStorm.
 * User: sui
 * Date: 2017/10/26
 * Time: 14:46
 */

namespace Creational\Factory\Src;


class Human implements ManKind
{
    public function __construct()
    {
        echo 'creating human ...<br>';
    }

    public function belonging()
    {
        echo 'creating human ...<br>';
    }
}