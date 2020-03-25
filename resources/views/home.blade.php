@extends('layout')

@section('product')
    <div class="container">
        <div class="featured-hero-product w-100 row align-items-center">
            <h1 class="text-center text-black" >Brand New</h1>
        </div>
    <div class="row no-gutters products">
        @foreach($newests as $p)
        <div class="col-6 col-md-6 col-lg-4">
            <a href="#" class="item">
                <a href="{{url("/product/{$p->id}")}}">
                    <img src="images/product_1.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="item-info">
                    <h3>{{$p->product_name}}</h3>
                    <span class="collection d-block">{{$p->product_desc}}</span>
                    <strong class="price">{{$p->price}}</strong>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    </div>
    <div class="container">
        <div class="featured-hero-product w-100 row align-items-center">
            <h1 class="text-center text-black" >Authentic</h1>
        </div>
    <div class="row no-gutters products">
        @foreach($max_price as $p)
        <div class="col-6 col-md-6 col-lg-4">
            <a href="#" class="item">
                <a href="{{url("/product/{$p->id}")}}">
                    <img src="images/product_1.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="item-info">
                    <h3>{{$p->product_name}}</h3>
                    <span class="collection d-block">{{$p->product_desc}}</span>
                    <strong class="price">{{$p->price}}</strong>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    </div>
    <div class="container">
        <div class="featured-hero-product w-100 row align-items-center">
            <h1 class="text-center text-black" >Second 2</h1>
        </div>
    <div class="row no-gutters products">
        @foreach($min_price as $p)
        <div class="col-6 col-md-6 col-lg-4">
            <a href="#" class="item">
                <a href="{{url("/product/{$p->id}")}}">
                    <img src="images/product_1.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="item-info">
                    <h3>{{$p->product_name}}</h3>
                    <span class="collection d-block">{{$p->product_desc}}</span>
                    <strong class="price">{{$p->price}}</strong>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    </div>
    @endsection
