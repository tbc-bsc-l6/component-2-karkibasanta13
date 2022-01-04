@extends('layouts.layout')

@section('title')
    Laravel
@endsection

@section('css_cdn')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
@endsection

@section('js_cdn')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
@endsection

@section('nav')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="img/lbu.png" alt="" width="100" height="50" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="products/book">Book</a></li>
                            <li><a class="dropdown-item" href="products/cd">CD</a></li>
                            <li><a class="dropdown-item" href="products/game">Game</a></li>
                        </ul>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <button type="button" class="btn btn-primary">Login</button>
                                </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        <button type="button" class="btn btn-dark">Sign Up</button>
                                    </a>
                                </li>
                            @endif
                        @endauth
                </ul>
            </div>
            @endif
        </div>
    </nav>
@endsection

@section('content')
    <div class = "container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <a href="products/book"><img src="img/book.png" class="card-img-top" alt="book"></a>
                    <div class="card-body">
                        <h5 class="card-title">Book</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="products/cd"><img src="img/cd.jpg" class="card-img-top" alt="cd" style="height: 275px;"></a>
                    <div class="card-body">
                        <h5 class="card-title">CD</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="products/game"><img src="img/game.png" class="card-img-top" alt="game"></a>
                    <div class="card-body">
                        <h5 class="card-title">Game</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')

    <br><hr style="margin-left: 55px; margin-right: 55px;">
    <div class="container-fluid">

        <footer
            class="text-center text-lg-start text-white"
            style="background-color: #1c2331"
        >
            <section
                class="d-flex justify-content-between p-4"
                style="background-color: rgba(0, 0, 0, 0.2)"
            >

            </section>
            <section>
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold">Level 6</h6>
                            <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                            />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dicta obcaecati
                                officiis ullam vero! Accusantium deserunt
                                dolorum est optio placeat porro vel veniam, veritatis. Assumenda hic minima rerum sequi voluptates?
                            </p>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Products</h6>
                            <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                            />
                            <p>
                                <a href="products/book" class="text-white">Book</a>
                            </p>
                            <p>
                                <a href="products/cd" class="text-white">CD</a>
                            </p>
                            <p>
                                <a href="products/game" class="text-white">Game</a>
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Useful links</h6>
                            <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                            />
                            <p>
                                <a href="#!" class="text-white">Your Account</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Become an Affiliate</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Shipping Rates</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Help</a>
                            </p>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Contact</h6>
                            <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                            />
                            <p><i class="fas fa-home mr-3"></i> Kathmandu, NP</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 977 111111/12</p>
                            <p><i class="fas fa-print mr-3"></i> + 977 111111</p>
                        </div>
                    </div>
                </div>
            </section>
            <div
                class="text-center p-3"
                style="background-color: rgba(0, 0, 0, 0.2)"
            >
                © 2021 Copyright: Basanta Karki
                <div>
                    <a href="https://github.com/karkibasanta13" class="text-white me-4">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </footer>
    </div>
@endsection
