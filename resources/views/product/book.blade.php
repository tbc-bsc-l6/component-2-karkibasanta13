<!doctype html>
<html>
<head>
    <title>
        Book
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
    <body>


    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Laravel Project</a>
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

    <div class="container-fluid" style="margin-top: 10px">
            <h1>Book List: </h1>
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Page</th>
                <th scope="col">Price</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Matt Zandstar</td>
                <td>Php Objects, Patterns and Practise</td>
                <td>6080</td>
                <td>44.99</td>
                <td><a href="#"><i class="fas fa-edit"></i></a></td>
                <td><a href="#"><i class="fas fa-trash"></i></a></td>
            </tr>

            </tbody>
        </table>

    </div>
    <hr>
{{----------------------------------------------------------------------------------}}

    <div class = "form" style="margin-left: 550px; align: center;">
        <form>
            <div class="row-2">Product:
                <div class="col-4">
                    <select>
                        <option>Book</option>
                        <option>CD</option>
                        <option>Game</option>
                    </select>
                </div>
            </div>
            <div class="row-2">First Name:
                <div class="col-4">
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="row-2">Main Name/Surname/Console:
                <div class="col-4">
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="row-2">Title:
                <div class="col-4">
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="row-2">Pages/Duration/PEGI:
                <div class="col-4">
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="row-2">Price:
                <div class="col-4">
                    <input type="text" class="form-control" >
                </div>
            </div>
            <br>
         <a class="btn btn-primary" href="#" role="button" style="margin-left: 150px;">Link</a>
        </form>
    </div>




    </body>

</html>
