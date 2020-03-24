@extends('layout')

@section('pr')
    <section class="page-section portfolio" id="portfolio">
        <div class="container">

            <!-- Portfolio Section Heading -->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Product</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <div class="row">
                <div class="tile text-center col-lg-12">
                    <h2>Danh sách sản phẩm theo danh muc</h2>
                </div>
            @foreach(\App\Category::all() as $c)

                <!-- Portfolio Item 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                    <i class="fas fa-plus fa-3x"></i>
                                    <div class="btn btn-xl btn-group-lg">
                                        <button type="button" href="" class="btn btn-secondary">Secondary</button>
                                    </div>
                                </div>
                            </div>
                            <img class="img-fluid" src={{asset('img/portfolio/lmh.jpg')}} alt="">
                            {{--                    <img class="img-fluid" src={{$p['image']}}>--}}
                        </div>
                        <div class="product-info">
                            <h2 class="text-center">{{$c->category_name}}</h2>
{{--                            <h3 class="text-center">Price :{{$c->price}}</h3>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
