<?php

use Creational\Factory\Src\Dwarf;
use Creational\Factory\Src\Factory;

class TestFactory extends \PHPUnit\Framework\TestCase
{

    public function test_factory()
    {
        $dwarf= Factory::createPeople(Factory::TYPE_DWARF);

        $this->assertTrue( $dwarf instanceof  Dwarf);
    }
}