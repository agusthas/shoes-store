@extends('layouts.app')

@section('content')
    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder mb-3">Our purpose is to inspire youth and empower youth culture.</h1>
                        <p class="lead fw-normal text-muted mb-4">Shoe store was built on the idea that shoes can be
                            bought for everyone. We inspire youth and empower youth culture, by fueling a shared passion
                            for self-expression and creating unrivaled experiences at the heart of the global sneaker
                            community.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @foreach($sections as $key => $section)
        @php($alternate = $key % 2 ==0)
        <section class="py-5 {{ $alternate ? 'bg-light' : '' }}">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 {{ $alternate ? '' : 'order-first order-lg-last' }}"><img
                            class="img-fluid shadow-sm mb-5 mb-lg-0"
                            src="{{ asset($section['image']) }}" alt="..."/></div>
                    <div class="col-lg-6">
                        <h2 class="text-danger text-uppercase fs-6 fw-bold">{{ $section['label'] }}</h2>
                        <h3 class="h2 fw-bolder">{{ $section['title'] }}</h3>
                        <p class="lead fw-normal text-muted mb-0">{{ $section['content'] }}</p>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <section class="py-5 {{ $sections->count() % 2 == 0 ? 'bg-light' : ''}}">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="fw-bolder">Our team</h2>
                <p class="lead fw-normal text-muted mb-5">Dedicated to get a good score for our final project</p>
            </div>
            <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                @foreach($teams as $team)
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4"
                                 src="{{ asset('/img/teams/' . $team['image']) }}" alt="{{ $team['name'] }}"/>
                            <h5 class="fw-bolder">{{ $team['name'] }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
