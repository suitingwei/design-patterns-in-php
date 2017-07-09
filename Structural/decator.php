<?php
echo "<h1>Decator Design Pattern </h1>";

class Core
{
    public function handle()
    {
        echo 'handling the core... <br>';
    }
}


class Cloth
{
    private $core;

    public function __construct(Core $core)
    {
        $this->core = $core;
    }

    public function handle()
    {
        $this->core->handle();
        echo " i am the cloth<br>";
    }
}

(new Cloth(new Core()))->handle();
	

