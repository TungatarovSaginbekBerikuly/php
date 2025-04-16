<?php

namespace Classes;

class Samsung extends Product
{
    public function __construct()
    {
        echo 'Hello from' . __CLASS__ . "<br>";
    }
}