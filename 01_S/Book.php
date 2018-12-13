<?php

class Book
{
    public function getTitle(): string
    {
        return 'A Great Book';
    }

    public function getAuthor(): string
    {
        return 'John Doe';
    }

    public function turnPage()
    {
        // pointer to next page
    }

    public function getCurrentPage(): string
    {
        return 'current page content';
    }

    public function getLocation()
    {
        // returns the position in the library
        // ie. shelf number & room number
    }
}
