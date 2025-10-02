<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="widht=device-widht, initial-scale=1.0">
    <title>Hamburgueria Trikas</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel-"stylesheet"/>
    <link href="./css/default.css" rel="stylesheet"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src=".public/img/hamburguer.jpg" alt="" width="32" height="32">
            Trikas
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMain">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Home Page</a>
        </li>
        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="menuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cardápio</a>
    <ul class="dropdown-menu" aria-labelledby="menuLink">
        <li>
            <a class="dropdown-item" href="#">Hamburguer</a>
        </li>
        <li>
            <a class="dropdown-item" href="#">Hot Dog</a>
        </li>
        <li>
            <a class="dropdown-item" href="#">Batatas Recheadas</a>
        </li>
        <li>
            <a class="dropdown-item" href="#">Batata Frita</a>
        </li>
        </li>
    </ul>
</li>
    </ul>
</div>
    </div>
</nav>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src=".public/img/hamburguer.jpg" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
            <img src=".public/img/hot dog.jpg" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
            <img src=".public/img/batata recheada.jpg" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
            <img src=".public/img/batata frita.jpg" class="d-block" alt="...">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<main class="container p-3">
    <div class="row">
        <div class="col">
            <div class="card text-white bg-warning">
                <img class="card-img-top" src=".public/img/hamburguer.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">O maior hamburguer!.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card text-white bg-warning">
                <img class="card-img-top" src=".public/img/hot dog.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">O melhor HotDog do mundo !.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card text-white bg-warning">
                <img class="card-img-top" src=".public/img/batata frita.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">super gostosos.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card text-white bg-warning">
                <img class="card-img-top" src=".public/img/batata recheada.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">batata muito recheada.</p>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="text-warning bg-danger">
    <div class="container">
        <div class="row">
            <div class="col" style="text-align: center;">
                <img class="mb-2" src="./img/ham-ico-64.png" alt="" width="64" height="64">
                <span class="display-5">Trikas</span>
                <small class="d-block mb-3">&copy;2024</small>
            </div>
        </div>
    </div>
</footer>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"/></body>/script> 
</body>
</html>
<?php require_once("./includes/page-top.php"); ?>
<?php require_once("./includes/page-botton.php"); ?>