@extends('layouts.template')

@section('content')
    @if (Route::has('login'))
        @auth
            <div class = "container-fluid">
                <div class="form" style="margin-left:550px; margin-right: 550px; border: 2px dotted deepskyblue; padding: 15px 15px">
                    <form  method="post" action="/products/update/{{$product->id}}">
                        @csrf
                        <div class="form-floating mb-2">
                            <select class="form-select" aria-label="Default select example" name="type">
                                <option {{$product->type=='Book'?'selected':''}} value="Book">Book</option>
                                <option {{$product->type=='CD'?'selected':''}} value="CD">CD</option>
                                <option {{$product->type=='Game'?'selected':''}} value="Game">Game</option>
                            </select>
                        </div>
                        <label>Author/Artist:</label>
                        <div class="form-floating mb-2">
                            <input type="text" value="{{$product->firstname}}" class="form-control" id="floatingInput" name="firstname" placeholder="First Name">
                            <label for="floatingInput">First Name</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" value="{{$product->mainname}}" class="form-control" id="floatingInput" name="mainname" placeholder="Main Name/Surname/Console">
                            <label for="floatingInput">Main Name/Surname</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" value="{{$product->title}}" class="form-control" id="floatingInput" placeholder="Title" name="title">
                            <label for="floatingInput">Title</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" value="{{$product->numpages}}" class="form-control" id="floatingInput" placeholder="Pages/Duratio/Pegi" name="numpages">
                            <label for="floatingInput">Pages</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="number" value="{{$product->price}}" class="form-control" id="floatingInput" placeholder="Price" name="price">
                            <label for="floatingInput">Price</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        @endif
    @endauth

@endsection
