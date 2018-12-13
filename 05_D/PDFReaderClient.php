<?php

class PDFReaderClient
{
    /** should return true */
    public function testItCanReadAPDFBook()
    {
        $b = new PDFBook();
        $r = new PDFReader($b);

        return preg_match('/pdf book/', $r->read());
    }
}
