<?php

require_once '../../vendor/autoload.php';

use Behavioral\ObserverPattern\Src\Observer;
use Behavioral\ObserverPattern\Src\Subject;

$observer1 = new Observer('A');
$observer2 = new Observer('B');
$observer3 = new Observer('C');

$subject = new  Subject('Suitingwei');

$subject->attachObserver($observer1);
$subject->attachObserver($observer2);
$subject->attachObserver($observer3);
$subject->setName('suitingwei');

$subject->detachObserver($observer3);
$subject->setName('wujun');
