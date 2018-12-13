<?php

class PDFReader
{
    private $book;

    function __construct(PDFBook $book)
    {
        $this->book = $book;
    }

    function read()
    {
        return $this->book->read();
    }
}
