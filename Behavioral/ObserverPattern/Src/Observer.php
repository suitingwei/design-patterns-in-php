<?php

namespace Behavioral\ObserverPattern\Src;

class Observer
{
    public $name;

    public function __construct($name = '')
    {
        $this->name = $name;
    }

    public function update(Subject $subject)
    {
        echo "Observer {$this->name} received the notify event:[ The Subject name 's {$subject->name}]\n";
    }
}

