<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Laravel
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
{{--@yield('nav')--}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/img/lbu.png" alt="" width="100" height="50" class="d-inline-block align-text-top">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        <button type="button" class="btn btn-primary">Login</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        <button type="button" class="btn btn-dark">Sign Up</button>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<div class = "container-fluid">


    <table class="table">
        <thead>
        <tr>
            <th scope="col">Console</th>
            <th scope="col">Title</th>
            <th scope="col">Pegi</th>
            <th scope="col">Price</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Play Station</td>
            <td>Animal Crossing</td>
            <td>3</td>
            <td>44.99</td>
            <td><a href="#"><i class="fas fa-edit"></i></a></td>
            <td><a href="#"><i class="fas fa-trash"></i></a></td>
        </tr>

        {{--        @foreach($hr_request as $row)--}}
        {{--            <tr>--}}
        {{--                <td>{{$row->title}}</td>--}}
        {{--                <td>{{$row->firstname}}</td>--}}
        {{--                <td>{{$row->mainname}}</td>--}}
        {{--                <td>{{$row->price}}</td>--}}
        {{--                <td>{{$row->numpage}}</td>--}}

        {{--                <td><a href="#"><i class="fas fa-edit"></i></a></td>--}}
        {{--                <td><a href="#"><i class="fas fa-trash"></i></a></td>--}}

        {{--            </tr>--}}
        {{--        @endforeach--}}

        </tbody>
    </table>
</div>

<div class = "container-fluid">
    <div class="form" style="margin-left:550px; margin-right: 550px; border: 2px dotted deepskyblue; padding: 15px 15px">
        <form>
            <div class="form-floating mb-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Type</option>
                    <option>Book</option>
                    <option >CD</option>
                    <option >Game</option>
                </select></div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                <label for="floatingInput">First Name</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="Main Name/Surname/Console">
                <label for="floatingInput">Main Name/Surname/Console</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="Title">
                <label for="floatingInput">Title</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="Pages/Duratio/Pegi">
                <label for="floatingInput">Pages/Duratio/Pegi</label>
            </div>
            <div class="form-floating mb-2">
                <input type="number" class="form-control" id="floatingInput" placeholder="Price">
                <label for="floatingInput">Price</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<br><hr style="margin-left: 55px; margin-right: 55px;">
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid">

    <!-- Footer -->
    <footer
        class="text-center text-lg-start text-white"
        style="background-color: #1c2331"
    >
        <!-- Section: Social media -->
        <section
            class="d-flex justify-content-between p-4"
            style="background-color: rgba(0, 0, 0, 0.2)"
        >

            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
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
                    <!-- Grid column -->

                    <!-- Grid column -->
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
                    <!-- Grid column -->

                    <!-- Grid column -->
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
                    <!-- Grid column -->

                    <!-- Grid column -->
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
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
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
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</div>
<!-- End of .container -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
</html>
