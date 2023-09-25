<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../BTTH01_CSE485_ex02/css/bootstrap.min.css">

</head>
<body>
        <?php 
            include "./Layout/header.php";
        ?>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="./img/imhsl.png" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                <img src="./img/imhsl.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="./img/imhsl.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="text-center text-primary">
            <h1>Top bài hát yêu thích</h1>
        </div>
        <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card all-crs-wid" style="width: 18rem;">
                        <img src="./img/Cayla.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class=" text-center text-primary card-text">Cây, lá và gió</p>
                    </div>
                </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card all-crs-wid" style="width: 18rem;">
                        <img src="./img/Cayla.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class=" text-center text-primary card-text">Cây, lá và gió</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card all-crs-wid" style="width: 18rem;">
                        <img src="./img/Cayla.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class=" text-center text-primary card-text">Cây, lá và gió</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card all-crs-wid" style="width: 18rem;">
                        <img src="./img/Cayla.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class=" text-center text-primary card-text">Cây, lá và gió</p>
                        </div>
                    </div>
                </div>
        </div>
        
        <div class="card text-center">
                <h1>TLU'S MUSIC GARDEN</h1>
        </div>
</body>
<script src="./js/bootstrap.bundle.min.js"></script>
</html>