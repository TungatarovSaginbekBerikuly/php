<?php

$filename = "images";
$sliderImage = $_FILES["slider_img"];

if (!is_dir($filename)) {
    mkdir($filename);
}

if ($sliderImage["name"] != '') {
    if ($sliderImage["type"] == "image/png" 
        || $sliderImage["type"] == "image/jpg"
        || $sliderImage["type"] == "image/jpeg") {
        move_uploaded_file($sliderImage['tmp_name'], 
            __DIR__ . "/images/" . $sliderImage['name']);
        header("location: index.php");
    } else {
        echo "<pre>";
        var_dump($_FILES);
        echo "</pre>";
        exit("Загрузите только картинку с форматами: png, jpg.");
    }
} else {
    exit("Не удалось загрузить картинку. Попробуйте еще раз!");
}



