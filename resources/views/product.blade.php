@extends('layout')

@section('pr')

    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Product</h2>

    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
    </div>
    @foreach($product1 as $p1)
    <div class="col-md-6 col-lg-4">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white">
                    <i class="fas fa-plus fa-3x"></i>
                </div>
            </div>
            <img class="img-fluid text-center" src={{("img/portfolio/cabin.png")}} alt="">
            <div class="btn btn-xl btn-primary col-lg-12">
                <h4 class="fas fa-times fa-fw text-center">
                    Add to cart
                </h4>
            </div>
        </div>
        <h2 class="text-center">{{$p1['name1']}}</h2>
        <h3 class="text-center">Price :{{$p1['price1']}}</h3>
    </div>
    @endforeach
@endsection
