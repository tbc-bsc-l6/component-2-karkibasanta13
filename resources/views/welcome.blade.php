{{--@extends('layouts.layout')--}}
@extends('layouts.template')


@section('title')
    Laravel
@endsection


@section('content')
    <div style=" margin-top: 5px; margin-bottom:5px; height: 40px; color: darkslateblue;">
        <h2 style="text-align: center; font-family: 'Comic Sans MS'">SELECT THE PRODUCT</h2>
    </div>
    <div class = "container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top:5px;">
            <div class="col">
                <div class="card h-100" style="border: 5px solid #1ab2ff">
                    <a href="products/book"><img src="img/book.jpg" class="card-img-top" alt="book" style="height: 267px;"></a>
                    <div class="card-body"">
                        <h5 class="card-title">Book</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100"  style="border: 5px solid #1ab2ff">
                    <a href="products/cd"><img src="img/cd.jpg" class="card-img-top" alt="cd" style="height: 267px;"></a>
                    <div class="card-body">
                        <h5 class="card-title">CD</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100"  style="border: 5px solid #1ab2ff">
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

