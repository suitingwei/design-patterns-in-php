<?php
namespace Creational\Singleton;


use Creational\Factory\Src\Dwarf;
use Creational\Factory\Src\Factory;
use Creational\Singleton\Src\Singleton;
use PHPUnit\Framework\TestCase;

class Test  extends  TestCase {

    public function testSingleton()
    {
        $s1 = Singleton::getInstance();
        $s2 = Singleton::getInstance();
        $s3 = Singleton::getInstance();

        $this->assertTrue($s1 === $s2);
        $this->assertTrue($s1 === $s3);
        $this->assertTrue($s2 === $s3);
    }
    public function test_factory()
    {
        $dwarf= Factory::createPeople(Factory::TYPE_DWARF);

        $this->assertTrue( $dwarf instanceof  Dwarf);
    }

}
