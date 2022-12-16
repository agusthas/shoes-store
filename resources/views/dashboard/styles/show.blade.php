@extends('dashboard.layouts.app')

@section('title', 'Style: ' . $style->name)

@section('content')
    <h1 class="h2">Style: {{ $style->name }}</h1>
    <hr>

    <div class="mb-3 hstack gap-2">
        <a href="{{ route('admin.styles.index') }}" class="btn btn-sm btn-secondary">Back</a>
        <x-buttons.action-buttons
            :show="route('admin.styles.show', $style->id)"
            :edit="route('admin.styles.edit', $style->id)"
            :delete="route('admin.styles.destroy', $style->id)"
        />
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input class="form-control" type="text" disabled value="{{ $style->name }}">
    </div>
@endsection
