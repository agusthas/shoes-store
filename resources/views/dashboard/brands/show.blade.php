@extends('dashboard.layouts.app')

@section('title', 'Brand: ' . $brand->name)

@section('content')
    <h1 class="h2">Brand: {{ $brand->name }}</h1>
    <hr>

    <div class="mb-3 hstack gap-2">
        <a href="{{ route('admin.brands.index') }}" class="btn btn-sm btn-secondary">Back</a>
        <x-buttons.action-buttons
            :show="route('admin.brands.show', $brand->id)"
            :edit="route('admin.brands.edit', $brand->id)"
            :delete="route('admin.brands.destroy', $brand->id)"
        />
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input class="form-control" type="text" disabled value="{{ $brand->name }}">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <div class="card text-bg-light">
            <div class="card-body">
                {!! $brand->description !!}
            </div>
        </div>
    </div>
@endsection
