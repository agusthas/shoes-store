@extends('dashboard.layouts.app')

@section('title', 'User: ' . $user->name)

@section('content')
    <h1 class="h2">User: {{ $user->name }}</h1>
    <hr>


    <div class="mb-3 hstack gap-2">
        <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-secondary">Back</a>

        <x-buttons.action-buttons
            :show="route('admin.users.show', $user->id)"
            :edit="route('admin.users.edit', $user->id)"
            :delete="route('admin.users.destroy', $user->id)"
        />
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input disabled type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input disabled type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
    </div>
@endsection
