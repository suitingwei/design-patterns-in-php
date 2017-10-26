<?php

namespace Creational\Factory\Src;

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


