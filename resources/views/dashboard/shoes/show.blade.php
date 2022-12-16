@extends('dashboard.layouts.app')

@section('title', 'Shoe: ' . $shoe->name)

@section('content')
    <h1 class="h2">Shoe: {{ $shoe->name }}</h1>
    <hr>


    <div class="mb-3 hstack gap-2">
        <a href="{{ route('admin.shoes.index') }}" class="btn btn-sm btn-secondary">Back</a>

        <x-buttons.action-buttons
            :show="route('admin.shoes.show', $shoe->id)"
            :edit="route('admin.shoes.edit', $shoe->id)"
            :delete="route('admin.shoes.destroy', $shoe->id)"
        />
    </div>

    <div class="mb-3">
        <label for="brand_id" class="form-label">Brand</label>
        <select name="brand_id" id="brand_id" class="form-select" disabled>
            <option value="" selected disabled>{{ $shoe->brand->name }}</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input disabled type="text" class="form-control" id="name" name="name" value="{{ $shoe->name }}">
    </div>

    <div class="mb-3">
        <div class="row">
            <div class="col">
                <label for="category_id" class="form-label">Category</label>
                <select disabled name="category_id" id="category_id" class="form-select" required>
                    <option value="" selected disabled>{{ $shoe->category->name }}</option>
                </select>
            </div>
            <div class="col">
                <label for="style_id" class="form-label">Style</label>
                <select disabled name="style_id" id="style_id" class="form-select" required>
                    <option value="" selected disabled>{{ $shoe->style->name }}</option>
                </select>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <div class="input-group">
            <span class="input-group-text">IDR</span>
            <input disabled type="number" class="form-control" id="price" required name="price"
                   value="{{ $shoe->price }}">
        </div>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Sizes and Stocks</label>
        <div class="row">
            @foreach($shoe->sizes->chunk(7) as $chunk)
                <div class="col-sm-3">
                    <table class="table table-responsive table-bordered">
                        <tbody>
                        @foreach($chunk as $size)
                            <tr>
                                <th scope="row">{{ floatval($size->us) }}</th>
                                <td>
                                    <input disabled type="number" class="form-control form-control-sm"
                                           value="{{ $size->stock->quantity }}">
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <div class="card text-bg-light">
            <div class="card-body">
                {!! $shoe->description !!}
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Images</label>
        <div class="row g-2">
            @foreach($shoe->images as $image)
                <div class="col-sm-3">
                    <div class="card">
                        <img src="{{ asset('storage/' . $image->path) }}" alt="..." class="card-img-top">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
