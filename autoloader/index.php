<?php

error_reporting(0);

use Classes\Category;
use Classes\Product;
use Classes\Iphone;
use Classes\Samsung;
use Classes\Test;

// require_once "Classes/Category.php";
// require_once "Classes/Product.php";
// require_once "Classes/Iphone.php";
// require_once "Classes/Samsung.php";
// require_once "Classes/Test.php";

function autoloader($class) {
    $path = str_replace('\\', '/', $class) . ".php";
    if(file_exists($path)) {
        require_once $path;
    }
}

spl_autoload_register('autoloader');

$a = new Category();
$b = new Product();
$c = new Iphone();
$d = new Samsung();
$f = new Test();

