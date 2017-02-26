<?php
echo '<h1>Factory Design Pattern</h1>';

class Dwarf
{
    public function __construct()
    {
        echo 'creating dwarf...<br>';
    }
}

class Elf
{
    public function __construct()
    {
        echo 'creating elf...<br>';
    }
}

class Human
{
    public function __construct()
    {
        echo 'creating human ...<br>';
    }
}

class Factory
{
    const TYPE_DWARF = 'dwarf';
    const TYPE_HUMAN = 'human';
    const TYPE_ELF   = 'elf';

    public static function createPeople($peopleType)
    {
        switch ($peopleType) {
            case static::TYPE_DWARF:
                return new Dwarf();
            case static::TYPE_ELF:
                return new Elf();
            case static::TYPE_HUMAN:
                return new Human();
            default :
                throw new \Exception('can not create other things');
        }
    }
}

$human = Factory::createPeople(Factory::TYPE_HUMAN);
$elf   = Factory::createPeople(Factory::TYPE_ELF);
$dwarf = Factory::createPeople(Factory::TYPE_DWARF);

