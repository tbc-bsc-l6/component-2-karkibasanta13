{{--@extends('layouts.layout')--}}
@extends('layouts.template')


@section('title')
    Laravel
@endsection


@section('content')
{{--    <div style=" margin-top: 5px; margin-bottom:5px; height: 40px; color: deepskyblue;">--}}
{{--        <h2 style="text-align: center; font-family: 'Comic Sans MS'">SELECT THE PRODUCT</h2>--}}
{{--    </div>--}}
    <div class = "container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top:5px;">
            <div class="col">
                <div class="card h-100" style="border: 1px solid white">
                    <a href="products/book"><img src="img/book.jpg" class="card-img-top" alt="book" style="height: 267px;"></a>
                    <div class="card-body" style="background-color: #000000; color: white">
                        <h3 class="card-title" style="text-align: center">Book</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="border: 1px solid white">
                    <a href="products/cd"><img src="img/cd.jpg" class="card-img-top" alt="cd" style="height: 267px;"></a>
                    <div class="card-body" style="background-color: #000000; color: white">
                        <h3 class="card-title"style="text-align: center">CD</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="border: 1px solid white">
                    <a href="products/game"><img src="img/game.png" class="card-img-top" alt="game"></a>
                    <div class="card-body" style="background-color: #000000; color: white" >
                        <h3 class="card-title" style="text-align: center">Game</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

