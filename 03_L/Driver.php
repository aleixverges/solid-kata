<?php

class Driver
{
    public function go(Vehicle $v)
    {
        $v->startEngine();
        $v->accelerate();
    }
}
