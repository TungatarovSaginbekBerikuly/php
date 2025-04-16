<?php

namespace Classes;

class Iphone extends Product
{
    public function __construct()
    {
        echo 'Hello from' . __CLASS__ . "<br>";
    }
}