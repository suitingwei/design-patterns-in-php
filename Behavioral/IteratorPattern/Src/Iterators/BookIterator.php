<?php
/**
 * Created by PhpStorm.
 * User: sui
 * Date: 2017/7/10
 * Time: 22:04
 */

namespace Behavioral\IteratorPattern\Src\Iterators;

use Behavioral\IteratorPattern\Src\Book;
use Behavioral\IteratorPattern\Src\BooksCollection;

class BookIterator implements Iterator
{
    private $books;
    private $iteratorPosition = 0;

    /**
     * BookIterator constructor.
     * @param BooksCollection $booksCollection
     * @internal param BooksCollection $this
     */
    public function __construct(BooksCollection $booksCollection)
    {
        $this->books = $booksCollection->all();
    }

    public function hasNext()
    {
        return isset($this->books[$this->iteratorPosition]);
    }

    /**
     * @return Book
     */
    public function next()
    {
        $result                 = $this->books[$this->iteratorPosition];
        $this->iteratorPosition += 1;
        return $result;
    }
}