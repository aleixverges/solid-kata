<?php

/** should return true */
function readPDF()
{
    $b = new PDFBook();
    $r = new PDFReader($b);

    return preg_match('/pdf book/', $r->read());
}
