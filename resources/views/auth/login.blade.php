@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card card-body p-5">
                    <h1 class="m-0 p-0 lh-1 fw-bold fs-4 text-uppercase">Login</h1>
                    <hr>
                    <small class="text-muted mb-3">If you have an account, login with your email address.</small>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email"
                                   class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email') }}"
                                   required autocomplete="email" autofocus>
                            @error('email')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password"
                                   class="form-label">{{ __('Password') }}</label>

                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="current-password">

                            @error('password')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-black">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                    <small class="text-center mt-3">
                        Don't have an account? <a href="{{ route('register') }}" class="text-dark">Register now</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
@endsection
