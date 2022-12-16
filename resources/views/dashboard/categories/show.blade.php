@extends('dashboard.layouts.app')

@section('title', 'Category: ' . $category->name)

@section('content')
    <h1 class="h2">Category: {{ $category->name }}</h1>
    <hr>

    <div class="mb-3 hstack gap-2">
        <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-secondary">Back</a>
        <x-buttons.action-buttons
            :show="route('admin.categories.show', $category->id)"
            :edit="route('admin.categories.edit', $category->id)"
            :delete="route('admin.categories.destroy', $category->id)"
        />
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input class="form-control" type="text" disabled value="{{ $category->name }}">
    </div>
@endsection
