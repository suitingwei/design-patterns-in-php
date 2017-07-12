<?php

namespace Behavioral\IteratorPattern\Src\Iterators;

use Behavioral\IteratorPattern\Src\BooksCollection;

class BookReverseIterator implements Iterator
{
    private $books;
    private  $iteratorPosition ;

    /**
     * BookReverseIterator constructor.
     * @param BooksCollection $booksCollection
     * @internal param BooksCollection $this
     */
    public function __construct(BooksCollection $booksCollection)
    {
        $this->books = $booksCollection->all();
        $this->iteratorPosition = count($this->books)-1;
    }

    public function hasNext()
    {
        return isset($this->books[$this->iteratorPosition]);
    }

    public function next()
    {
        $result                 = $this->books[$this->iteratorPosition];
        $this->iteratorPosition -= 1;
        return $result;
    }
}