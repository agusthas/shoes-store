@extends('layouts.app')

@section('content')
    <div class="container-xxl">
        <div class="mt-2 mb-4">
            <div id="homePageCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel"
                 data-bs-interval="4000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#homePageCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#homePageCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#homePageCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid"
                             src="{{ asset('/img/carousels/1.webp') }}"
                             alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid"
                             src="{{ asset('/img/carousels/2.webp') }}"
                             alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid"
                             src="{{ asset('/img/carousels/3.webp') }}"
                             alt="...">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <section class="py-3">
            <h2 class="h1 fw-bold">Our Latest Collections</h2>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5">
                @foreach($shoes as $shoe)
                    <div class="col">
                        <div class="product-card card h-100" role="button">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($shoe->images->first()->path) }}"
                                 class="card-img-top"
                                 alt="...">
                            <div class="card-body">
                                <hr class="mt-0"/>
                                <small class="d-block fw-bold">{{ $shoe->name }}</small>
                                <small
                                    class="card-text d-block mt-2">Rp. {{ number_format($shoe->price, 0, ',', '.') }}</small>
                                <a href="{{ route('shoes.show', $shoe->id) }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="py-5">

            <div class="row row-cols-1 row-cols-sm-3">
                <div class="col mb-3 mb-sm-0">
                    <div class="position-relative">
                        <div class="overlay bg-black bg-opacity-25">
                            <a href="{{ route('shoes', ['category' => \App\Models\Category::query()->where('name', 'LIKE', '%'.'men'.'%')->first()->id]) }}"
                               class="btn btn-lg btn-black mt-auto mb-5 fw-bold text-uppercase">
                                Shop Mens Footwear
                            </a>
                        </div>
                        <img class="img-fluid" src="{{ asset('/img/men.jpg') }}" alt="Shop Mens Footwear">
                    </div>
                </div>
                <div class="col mb-3 mb-sm-0">
                    <div class="position-relative">
                        <div class="overlay bg-black bg-opacity-25">
                            <a href="{{ route('shoes', ['category' => \App\Models\Category::query()->where('name', 'LIKE', '%'.'women'.'%')->first()->id]) }}"
                               class="btn btn-lg btn-black mt-auto mb-5 fw-bold text-uppercase">
                                Shop Womens Footwear
                            </a>
                        </div>
                        <img class="img-fluid" src="{{ asset('/img/women.jpg') }}" alt="Shop Womens Footwear">
                    </div>
                </div>
                <div class="col mb-3 mb-sm-0">
                    <div class="position-relative">
                        <div class="overlay bg-black bg-opacity-25">
                            <a href="{{ route('shoes') }}"
                               class="btn btn-lg btn-black mt-auto mb-5 fw-bold text-uppercase">
                                Shop All Footwear
                            </a>
                        </div>
                        <img class="img-fluid" src="{{ asset('/img/all.jpg') }}" alt="Shop All Footwear">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
