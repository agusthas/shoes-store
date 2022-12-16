@extends('layouts.app')

@section('title', $shoe->name)

@section('content')
    <section class="container py-4">
        <div class="row">
            <div class="col-sm-7 order-last order-sm-first">
                <div id="carouselExampleDark" class="carousel carousel-dark slide d-block d-sm-none">
                    <div class="carousel-indicators">
                        @foreach($shoe->images as $key => $image)
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}"
                                    class="{{ $key == 0 ? 'active' : '' }}" aria-label="Slide 2"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach($shoe->images as $key => $image)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img class="d-block w-100 img-fluid"
                                     src="{{ \Illuminate\Support\Facades\Storage::url($image->path) }}"
                                     alt="{{ $shoe->name }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="d-none d-sm-block">
                    <img class="img-fluid"
                         src="{{ \Illuminate\Support\Facades\Storage::url($shoe->images()->first()->path) }}"
                         alt="{{ $shoe->name }}">

                    <div class="row">
                        @foreach($shoe->images->skip(1) as $shoeImage)
                            <div class="col-sm-6 mb-4">
                                <img class="img-thumbnail"
                                     src="{{ \Illuminate\Support\Facades\Storage::url($shoeImage->path) }}"
                                     alt="{{ $shoeImage->name }}">
                            </div>
                        @endforeach
                    </div>
                </div>

                <hr>
                <div id="productInfo">
                    <h2 class="fs-4 fw-normal py-3">{{ $shoe->name }} - Product Details</h2>
                    {!! $shoe->description !!}
                </div>
            </div>
            <div class="col-sm-5">
                <div class="sticky-sm-top py-4" style="z-index: 0;">
                    <div>
                        <h2 class="text-danger text-uppercase fs-6 fw-bold">{{ $shoe->brand->name }}</h2>
                        <h1 class="text-uppercase fs-5 fw-normal">{{ $shoe->name }}</h1>

                        <p class="fw-bold">Rp. {{ number_format($shoe->price, 0, ',', '.') }}</p>

                        <button id="moreInfo" class="btn btn-link p-0 m-0">More Info</button>
                    </div>
                    <hr>
                    <div class="card">
                        <div class="card-body position-relative">
                            @if(auth()->check() && auth()->user()->cart->stocks()->where('shoe_id', $shoe->id)->exists())
                                <p class="small">This product is already in your cart.</p>
                                <a href="{{ route('cart') }}" class="btn btn-danger">Show in cart</a>
                            @else
                                <form class="row" action="{{ route('cart.add') }}" method="POST">
                                    @csrf
                                    <fieldset class="col-12 mb-3">
                                        <legend class="form-label fs-6">Size</legend>
                                        <div class="hstack gap-2">
                                            @foreach($shoe->sizes->sortBy('us') as $size)
                                                <div class="flex-shrink-0">
                                                    <input type="hidden" name="shoe_id" value="{{ $shoe->id }}">
                                                    <input type="radio" class="btn-check" value="{{ $size->id }}"
                                                           name="size_id"
                                                           id="size-{{ $size->id }}"
                                                           @if($size->stock->quantity == 0) disabled @endif
                                                           @if(old('size_id') == $size->id) checked @endif />
                                                    <label class="btn btn-sm btn-outline-dark fw-bold"
                                                           for="size-{{ $size->id }}">US {{ floatval($size->us) }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </fieldset>

                                    <p class="col-sm-12 fw-bold mb-3" id="inStock"></p>

                                    <div class="col-8 mb-3">
                                        <label for="quantity" class="form-label fw-bold">Quantity</label>
                                        <input type="number" name="quantity" id="quantity" min="1" class="form-control"
                                               value="{{ old('quantity', 1) }}">
                                    </div>

                                    <div class="col-12">
                                        <button id="addToCart" class="btn btn-black text-uppercase w-100" disabled>
                                            <i class="bi bi-cart-fill me-1"></i>
                                            Add to cart
                                        </button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script type="text/javascript">
        const quantity = @json($shoe->getAllStocks());

        document.querySelectorAll('input[type=radio][name="size_id"]').forEach((radio) => {
            radio.addEventListener('change', (evt) => {
                const value = evt.target.value;
                const qtyInput = document.getElementById('quantity');
                qtyInput.removeAttribute('disabled');
                qtyInput.setAttribute('max', quantity[value]);

                document.getElementById('inStock').textContent = `In Stock: ${quantity[value]}`;
                document.getElementById('addToCart').removeAttribute('disabled');
            })
        })

        // Scroll into view
        document.getElementById('moreInfo').addEventListener('click', () => {
            document.getElementById('productInfo').scrollIntoView();
        })
    </script>
@endpush
