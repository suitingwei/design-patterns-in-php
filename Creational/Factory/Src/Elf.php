<?php
/**
 * Created by PhpStorm.
 * User: sui
 * Date: 2017/10/26
 * Time: 14:49
 */

namespace Creational\Factory\Src;


class Elf implements ManKind
{
    public function __construct()
    {
    }

    public function belonging()
    {
        echo 'creating elf...<br>';
    }
}