<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Slider v1</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Слайдер в PHP</h1>
        <h3 class="mt-5">Загрузить изображение</h3>
        <form action="slider.php" class="mt-3" method="POST" enctype="multipart/form-data">
            <input class="form-control" type="file" id="formFile" name="slider_img">
            <button type="submit" class="btn btn-primary mt-3">Загрузить</button>
        </form>
        <h3 class="mt-5">Слайдер</h3>
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">            
            <div class="carousel-inner">
                <?php 
                $dir = __DIR__ . "/images/";
                if (is_dir($dir)) {
                    $openDir = opendir($dir); 
                    $active = true;
                    while (($file = readdir($openDir)) !== false) {
                        if($file != "." && $file != ".."){
                            if($active) {
                                echo '<div class="carousel-item active">';
                                $active = false;
                            } else {
                                echo '<div class="carousel-item">';
                            }
                            echo '<img src="images/'. $file .'" class="d-block w-100" alt="..."></div>';
                        }
                    }
                    closedir($dh);
                } else {
                    echo "Загрузите картинки для слайдера.";
                } 
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>