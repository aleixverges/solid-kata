<?php

class ProgressClient
{
    /** Should return true */
    public function fileProgress()
    {
        $file = new File();
        $file->length = 200;
        $file->sent = 100;

        $progress = new Progress($file);

        return $progress->getAsPercent() === 50;
    }
}
