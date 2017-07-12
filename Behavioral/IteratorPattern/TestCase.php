<?php

namespace Behavioral\IteratorPattern;

use Behavioral\IteratorPattern\Src\BooksCollection;

require_once '../../vendor/autoload.php';

/**
 * Iterator pattern is just a encapsulation of the array,list,vector,hashtable....
 * It provides a way to access the elements of an aggregate object sequentially witout expose its underlying representation.
 * Also we should learn more about the Liskov Subsititution principle.Use the abstract
 * or the interface but not the relization.
 */
$booksCollection = new BooksCollection(5);

$iterator        = $booksCollection->createIterator();
$reverseIterator = $booksCollection->createReverseIterator();

while ($iterator->hasNext()) {
    echo $iterator->next()->printName();
}

while ($reverseIterator->hasNext()) {
    echo $reverseIterator->next()->printName();
}