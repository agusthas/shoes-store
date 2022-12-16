@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card card-body p-5">
                    <h1 class="m-0 p-0 lh-1 fw-bold fs-4 text-uppercase">Create Account</h1>
                    <hr>
                    <small class="text-muted mb-3">Create a new account to be able to buy our shoes :)</small>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" placeholder="Enter your name" required
                                   autocomplete="name" autofocus>
                            <div class="invalid-feedback" role="alert">
                                @error('name') {{ $message }} @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email') }}" placeholder="Enter your email address" required
                                   autocomplete="email">
                            <div class="invalid-feedback" role="alert">
                                @error('email') {{ $message }} @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password"
                                   class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                   required>
                            <div class="invalid-feedback" role="alert">
                                @error('password') {{ $message }} @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm"
                                   class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-black">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                    <small class="text-center mt-3">
                        Already have an account? <a href="{{ route('login') }}" class="text-dark">Login</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
@endsection
