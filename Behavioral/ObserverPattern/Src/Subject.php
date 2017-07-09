<?php

namespace Behavioral\ObserverPattern\Src;

/**
 * The class be observered.
 * Class Subject
 */
class Subject
{
    public $name;

    public function __construct($name = '')
    {
        $this->name = $name;
    }

    public $observers = [];

    public function attachObserver(Observer $observer)
    {
        array_push($this->observers, $observer);
    }

    public function detachObserver(Observer $observer)
    {
        $this->observers = array_filter($this->observers, function ($value) use ($observer) {
            return $value != $observer;
        });
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->notify();
    }

    private function notify()
    {
        echo "Subject notifing all observers" . PHP_EOL;
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

