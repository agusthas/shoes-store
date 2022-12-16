@extends('dashboard.layouts.app')

@section('title', 'Edit User: ' . $user->name)

@section('content')
    <h1 class="h2">Edit User: {{ $user->name }}</h1>
    <hr>

    @if($errors->any())
        <div class="alert alert-danger">
            <div class="d-flex align-items-center">
                <span class="feather-md me-2" data-feather="alert-triangle"></span>
                <h4 class="m-0">
                    Error
                </h4>
            </div>
            <ul class="m-0 mt-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.update', $user->id) }}" method="post">
        @csrf
        @method("PATCH")

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input required type="text" class="form-control" id="name" name="name"
                   value="{{ old('name', $user->name) }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input required type="email" class="form-control" id="email" name="email"
                   value="{{ old('email', $user->email) }}">
        </div>

        <div class="hstack gap-2">
            <a href="{{ url()->previous('/dashboard') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
