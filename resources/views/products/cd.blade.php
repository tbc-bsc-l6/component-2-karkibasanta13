@extends('layouts.template')

@section('title')
    CD
@endsection


@section('content')

    <br>
    <form class="container-fluid">
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">Search</span>
            <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </form>
<br>

    <div class = "container-fluid">


        <table class="table">
            <thead>
            <tr>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Pages</th>
                <th scope="col">Price</th>
                @if (Route::has('login'))
                    @auth
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    @endif
                @endauth
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Mark</td>
                <td>The Land of God</td>
                <td>550</td>
                <td>250</td>
                @if (Route::has('login'))
                    @auth
                        <td><a href="#"><i class="fas fa-edit"></i></a></td>
                        <td><a href="#"><i class="fas fa-trash"></i></a></td>
                    @endif
                @endauth
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

@endsection

@section('form')
    @if (Route::has('login'))
        @auth
    <div class = "container-fluid">
        <div class="form" style="margin-left:550px; margin-right: 550px; border: 2px dotted deepskyblue; padding: 15px 15px">
            <form>
                <div class="form-floating mb-2">
                    <select class="form-select" aria-label="Default select example" name="type">
                        <option selected>Select Type</option>
                        <option>Book</option>
                        <option >CD</option>
                        <option >Game</option>
                    </select></div>
                <label>Author/Artist:</label>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInput" name="firstname" placeholder="First Name">
                    <label for="floatingInput">First Name</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInput" name="mainname" placeholder="Main Name/Surname/Console">
                    <label for="floatingInput">Main Name/Surname</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Title" name="title">
                    <label for="floatingInput">Title</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Pages/Duratio/Pegi" name="numpages">
                    <label for="floatingInput">Duration</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="number" class="form-control" id="floatingInput" placeholder="Price" name="price">
                    <label for="floatingInput">Price</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
        @endif
    @endauth

@endsection


