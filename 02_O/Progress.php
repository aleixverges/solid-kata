<?php

class Progress
{
    private $file;

    public function __construct(File $file)
    {
        $this->file = $file;
    }

    public function getAsPercent()
    {
        return $this->file->sent * 100 / $this->file->length;
    }
}
