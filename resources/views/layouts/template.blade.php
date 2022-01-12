@extends('layouts.layout')


{{--CDN LINK--}}
@section('cdn')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="css/style.css">
@endsection

{{--JS CDN LINK--}}
@section('js_cdn')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" rel="script" ></script>
@endsection

{{--NAVBAR SECTION--}}
@section('navbar')

    <nav class="navbar navbar-expand-lg navbar-dark " style="background: black; border-bottom: 1px solid white "  >
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/img/lbu.png" alt="" width="125" height="75" class="d-inline-block align-text-top">
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
                            <li><a class="dropdown-item" href="/products/book">Book</a></li>
                            <li><a class="dropdown-item" href="/products/cd">CD</a></li>
                            <li><a class="dropdown-item" href="/products/game">Game</a></li>
                        </ul>
                    </li>

                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dashboard') }}">
                                    Dashboard
                                </a>
                            </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        <button type="button" class="btn btn-danger">Sign Up</button>
                                    </a>
                                </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <button type="button" class="btn btn-success">Login</button>
                                </a>
                            </li>
                            @if (Route::has('register'))

                            @endif
                        @endauth
                </ul>
            </div>
            @endif

        </div>
    </nav>
@endsection





{{--FOOTER SECTION--}}
@section('footer')

    <br>
    <div class="container-fluid">
        <footer
            class="text-center text-lg-start text-white"
            style="background-color:black; border-top: 1px solid white"
        >
            <section
                class="d-flex justify-content-between p-4"
                style="background-color: black;">

                <div class="row" style="margin:auto; border-left: 1px solid white; border-right: 1px solid white;">
                  <div class="col">
                      <h3>Wanna hear more from us? SUBSCRIBE TO OUR NEWSLETTER</h3>
                      <form method="POST" action="{{route('subscribe')}}">
                          @csrf
                          <div class="input-group">
                              <input type="email" name="subscriber" class="form-control" placeholder="Enter your email">
                              <button type="submit" class="btn btn-danger">Subscribe</button>
                          </div>
                      </form>
                      @if (session('errors'))
                          <div class="alert alert-info">
                              <p>{{ session('errors') }}</p>
                          </div>
                      @endif
                        </div>
                </div>
            </section>
            <section>
                <div class="container text-center text-md-start mt-5" style="border-top: 1px solid white">
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
                                <a href="/products/book" class="text-white">Book</a>
                            </p>
                            <p>
                                <a href="/products/cd" class="text-white">CD</a>
                            </p>
                            <p>
                                <a href="/products/game" class="text-white">Game</a>
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
                style="background-color: black; border-top: 1px solid white"
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

