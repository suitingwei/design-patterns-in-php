<?php
/**
 * Created by PhpStorm.
 * User: sui
 * Date: 2017/7/10
 * Time: 21:59
 */

namespace Behavioral\IteratorPattern\Src;


use Behavioral\IteratorPattern\Src\Iterators\BookIterator;
use Behavioral\IteratorPattern\Src\Iterators\BookReverseIterator;
use Behavioral\IteratorPattern\Src\Iterators\Iterator;

class BooksCollection
{
    private $books = [];

    public function __construct($int)
    {
        for ($i = 0; $i < $int; $i++) {
            $this->books [] = new Book($i.'---'.Book::str_random(rand(4,10)));
        }
    }

    public function all()
    {
        return $this->books;
    }

    /**
     * @return Iterator
     */
    public function createIterator()
    {
        return new BookIterator($this);
    }

    public function createReverseIterator()
    {
        return new BookReverseIterator($this);
    }

}