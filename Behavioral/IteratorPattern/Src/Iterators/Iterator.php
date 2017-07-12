<?php
/**
 * Created by PhpStorm.
 * User: sui
 * Date: 2017/7/10
 * Time: 22:05
 */

namespace Behavioral\IteratorPattern\Src\Iterators;

use Behavioral\AdapterPattern\Src\Book;

interface Iterator
{
    /**
     * @return boolean
     */
    public function hasNext();

    /**
     * @return Book
     */
    public function next();
}