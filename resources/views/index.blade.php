
@extends('templates.nav')
<!doctype html>
<html>
<head>
    <title>
        Component II : View and Routing
    </title>
</head>

<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href ="css/style.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Laravel Project</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="product/book">Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="product/cd">CD's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="product/game">Games</a>
                </li>
                <button type="button" class="btn btn-success" style="margin-right: 3px">Login</button>
                </a>
                <a>
                    <button type="button" class="btn btn-danger">Sign Up</button>
                </a>
            </ul>
        </div>
    </div>
</nav>




<div class="container-fluid">
    <br><br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <a href="product/book"> <img src="img/books.jpg" class="card-img-top" alt="..."> </a>
                <div class="card-body">
                    <h5 class="card-title">Book</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="product/cd"> <img src="img/cd.jpg" height="320px" class="card-img-top" alt="..."> </a>
                <div class="card-body">
                    <h5 class="card-title">CD's</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <a href="product/game"> <img src="img/game.jpg" class="card-img-top" alt="..."> </a>
                <div class="card-body">
                    <h5 class="card-title">Games</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>
