@extends('dashboard.layouts.app')

@section('title', 'Size: ' . $size->us)

@section('content')
    <h1 class="h2">Size: {{ $size->us }}</h1>
    <hr>

    <div class="mb-3 hstack gap-2">
        <a href="{{ route('admin.sizes.index') }}" class="btn btn-sm btn-secondary">Back</a>
        <x-buttons.action-buttons
            :show="route('admin.sizes.show', $size->id)"
        />
    </div>

    <div class="mb-3">
        <label for="us" class="form-label">US</label>
        <input required disabled step=".5" type="number" class="form-control" id="us" name="us" value="{{ $size->us }}">
    </div>

    <div class="mb-3">
        <label for="uk" class="form-label">UK</label>
        <input required disabled step=".5" type="number" class="form-control" id="uk" name="uk" value="{{ $size->uk }}">
    </div>

    <div class="mb-3">
        <label for="eur" class="form-label">EUR</label>
        <input required disabled step=".5" type="number" class="form-control" id="eur" name="eur"
               value="{{ $size->eur }}">
    </div>

    <div class="mb-3">
        <label for="cm" class="form-label">CM</label>
        <input required disabled step=".5" type="number" class="form-control" id="cm" name="cm" value="{{ $size->cm }}">
    </div>
@endsection
