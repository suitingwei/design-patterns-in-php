<?php

namespace Behavioral\AdapterPattern\Src;

class Book implements BookInterface
{
    public function turnNextPage()
    {
        echo "Turning the next page\n";
    }

    public function turnPreviousPage()
    {
        echo "Turning the previous page\n";
    }
}
