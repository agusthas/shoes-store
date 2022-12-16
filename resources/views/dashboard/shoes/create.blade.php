@extends('dashboard.layouts.app')

@section('content')
    <h1 class="h2">Create a shoe</h1>
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

    <form action="{{ route('admin.shoes.store') }}" class="row" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="brand_id" class="form-label">Brand</label>
            <select name="brand_id" id="brand_id" class="form-select" required>
                <option value="" selected disabled>Please select</option>
                @foreach($brands as $brand)
                    <option
                        value="{{ $brand->id }}"
                        @if(old('brand_id') == $brand->id) selected @endif
                    >{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="form-select" required>
                        <option value="" selected disabled>Please select</option>
                        @foreach($categories as $category)
                            <option
                                value="{{ $category->id }}"
                                @if(old('category_id') == $category->id) selected @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="style_id" class="form-label">Style</label>
                    <select name="style_id" id="style_id" class="form-select" required>
                        <option value="" selected disabled>Please select</option>
                        @foreach($styles as $style)
                            <option
                                value="{{ $style->id }}"
                                @if(old('style_id') == $style->id) selected @endif
                            >{{ $style->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <div class="input-group">
                <span class="input-group-text">IDR</span>
                <input type="number" class="form-control" id="price" required name="price"
                       value="{{ old('price') }}">
            </div>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Sizes and Stocks</label>
            <div class="row">
                @foreach($sizes->chunk(7) as $chunk)
                    <div class="col-sm-3">
                        <table class="table table-responsive table-bordered">
                            <tbody>
                            @foreach($chunk as $size)
                                <tr>
                                    <th scope="row">{{ floatval($size->us) }}</th>
                                    <td>
                                        <input type="hidden"
                                               name="stocks[{{ $loop->parent->index }}][{{ $loop->index }}][size_id]"
                                               value="{{ $size->id }}">
                                        <input type="number" class="form-control form-control-sm"
                                               name="stocks[{{ $loop->parent->index }}][{{ $loop->index }}][quantity]"
                                               value="{{ old('stocks.' . $loop->parent->index . '.' . $loop->index . '.quantity', 0) }}">
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
            <x-forms.tinymce-editor name="description" :value="old('description', '')"/>
        </div>

        <div class="mb-3">
            <label for="images[]" class="form-label">Images</label>
            <input class="form-control" type="file" name="images[]" multiple>
            <div class="form-text">Accepted: <strong>image type</strong></div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
