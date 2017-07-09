<?php

namespace Behavioral\AdapterPattern\Src;

class Client
{
    private $book;

    public function __construct(BookInterface $book)
    {
        $this->book = $book;
    }

    public function goNext()
    {
        $this->book->turnNextPage();
    }

    public function goPrevious()
    {
        $this->book->turnPreviousPage();
    }
}