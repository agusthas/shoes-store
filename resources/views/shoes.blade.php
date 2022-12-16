@extends('layouts.app')

@section('content')
    <section class="container py-4">

        <header class="hstack justify-content-between align-items-center mt-3">
            <h1 class="fw-bold m-0 lh-1">Our Shoes</h1>
            <button class="btn btn-sm btn-black" type="button" data-bs-toggle="collapse"
                    data-bs-target="#filterCollapse"><i class="bi-filter"></i> Filters
            </button>
        </header>

        {{-- Filter Box --}}
        <div class="py-2">
            <div class="collapse" id="filterCollapse">
                <div class="card card-body">
                    <form class="row g-3" action="{{ route('shoes') }}" method="GET">
                        <div class="col-md-6">
                            <label for="category" class="form-label">Category</label>
                            <select id="category" name="category" class="form-select form-select-sm">
                                <option selected value="all">All</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @selected(request('category') == $category->id)>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="style" class="form-label">Styles</label>
                            <select id="style" name="style" class="form-select form-select-sm">
                                <option selected value="all">All</option>
                                @foreach($styles as $style)
                                    <option value="{{ $style->id }}"
                                        @selected(request('style') == $style->id)>{{ $style->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="form-label">Size</div>
                            <div class="hstack flex-wrap gap-2">
                                @foreach($sizes as $size)
                                    <div class="flex-shrink-0">
                                        <input type="radio" class="size-btn-check btn-check" value="{{ $size->id }}"
                                               name="size"
                                               id="size-{{ $size->id }}"
                                               @if(request('size') == $size->id) checked @endif autocomplete="off">
                                        <label class="btn btn-sm btn-outline-dark"
                                               for="size-{{ $size->id }}">US {{ floatval($size->us) }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="keyword" class="form-label">Keyword</label>
                            <input type="text" class="form-control form-control-sm" id="keyword" name="keyword"
                                   placeholder="Air Max, NMD, or Onitsuka" value="{{ request('keyword', '') }}">
                        </div>
                        <div class="col-12">
                            <label for="sortBy" class="form-label">Sort By</label>
                            <select class="form-select form-select-sm" name="sort_by" id="sortBy">
                                <option
                                    selected
                                    value="all">
                                    Initial Results
                                </option>
                                <option value="newest" @selected(request('sort_by') == "newest")>New Arrivals</option>
                                <option value="price_asc" @selected(request('sort_by') == "price_asc")>Price (Low to
                                    High)
                                </option>
                                <option value="price_desc" @selected(request('sort_by') == "price_desc")>Price (High to
                                    Low)
                                </option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-sm btn-outline-secondary" id="clearQueryButton">Clear
                            </button>
                            <button type="submit" class="btn btn-sm btn-danger">Query</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row row-cols-2 row-cols-md-4 g-5">
            @foreach($shoes as $shoe)
                <div class="col">
                    <div class="product-card card h-100" role="button">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($shoe->images->first()->path) }}"
                             class="card-img-top"
                             alt="...">
                        <div class="card-body">
                            <hr class="mt-0"/>
                            <small class="d-block fw-bold">{{ $shoe->name }}</small>
                            <small
                                class="card-text d-block mt-2">Rp. {{ number_format($shoe->price, 0, ',', '.') }}</small>
                            <a href="{{ route('shoes.show', $shoe->id) }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $shoes->links() }}
        </div>
    </section>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        const clearButton = document.getElementById('clearQueryButton');

        // Form inputs
        const categorySelect = document.getElementById('category');
        const styleSelect = document.getElementById('style');
        const keywordInput = document.getElementById('keyword');
        const sizeRadio = document.querySelectorAll('input[type="radio"].size-btn-check');
        const sortBySelect = document.getElementById('sortBy');

        clearButton.addEventListener('click', () => {
            categorySelect.value = "all";
            styleSelect.value = "all";
            keywordInput.value = "";
            sortBySelect.value = "all";
            sizeRadio.forEach((el) => el.checked = false);

            window.location.href = "{{ route('shoes') }}";
        });
    </script>
@endpush
