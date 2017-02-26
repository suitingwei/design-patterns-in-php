<?php
echo "<h1>Fluent Interface Design Pattern</h1>";

class Fluent
{
    private $name;
    private $sex;
    private $location;

    public function setName($name)
    {
        echo "setting name<br>";
        $this->name = $name;
        return $this;
    }

    public function setSex($sex)
    {
        echo "setting sex<br>";
        $this->sex = $sex;
        return $this;
    }

    public function setLocation($location)
    {
        echo "setting location<br>";
        $this->location = $location;
        return $this;
    }

    public function outPut()
    {
        echo "My Name is " . $this->name .
             ",and my sex is " . $this->sex,
            ",and my location is " . $this->location;
    }
}

(new Fluent)->setName("suitingwei")
            ->setSex("male")
            ->setLocation("now")
            ->outPut();

   
	
