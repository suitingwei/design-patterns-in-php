<?php

namespace Behavioral\AdapterPattern\Src;


class EReaderAdapter implements BookInterface
{
    private $EReader;

    public function __construct(EReader $EReader)
    {
        $this->EReader = $EReader;
    }

    public function turnNextPage()
    {
        $this->EReader->slideToNext();
    }

    public function turnPreviousPage()
    {
        $this->EReader->slideToPrevious();
    }
}