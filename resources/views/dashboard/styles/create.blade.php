@extends('dashboard.layouts.app')

@section('content')
    <h1 class="h2">Create a style</h1>
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

    <form action="{{ route('admin.styles.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input required type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

