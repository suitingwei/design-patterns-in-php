<?php
/**
 * Created by PhpStorm.
 * User: sui
 * Date: 2017/10/26
 * Time: 14:50
 */

namespace Creational\Factory\Src;

class Dwarf implements  ManKind
{
    public function __construct()
    {
    }

    public function belonging()
    {
        echo 'creating dwarf...<br>';
    }
}
