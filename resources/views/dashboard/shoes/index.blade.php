@extends('dashboard.layouts.app')

@if(session()->has('message'))
    @section('toast')
        <div class="toast" role="alert" data-bs-delay="3000">
            <div class="toast-header">
                <span class="feather-sm me-2" data-feather="bell"></span>
                <strong class="me-auto">Notification</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session()->get('message') }}
            </div>
        </div>
    @endsection
@endif

@section('content')
    <h1 class="h2">Shoes</h1>
    <hr>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
        <a href="{{ route('admin.shoes.create') }}" class="btn btn-sm btn-primary">
            <span data-feather="plus" class="align-text-bottom feather-sm"></span>
            New Data
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Brand</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Style</th>
                <th scope="col">Total Stock</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($shoes as $shoe)
                <tr class="align-middle">
                    <th scope="row">{{ $shoe->id }}</th>
                    <td>{{ $shoe->brand->name }} <a href="{{ route('admin.brands.show', $shoe->brand->id) }}"><span
                                class="feather-sm" data-feather="link-2"></span></a></td>
                    <td>{{ $shoe->name }}</td>
                    <td>{{ $shoe->category->name }} <a
                            href="{{ route('admin.categories.show', $shoe->category->id) }}"><span
                                class="feather-sm" data-feather="link-2"></span></a></td>

                    <td>{{ $shoe->style->name }} <a href="{{ route('admin.styles.show', $shoe->style->id) }}"><span
                                class="feather-sm" data-feather="link-2"></span></a></td>
                    <td>{{ $shoe->sizes->sum('stock.quantity') }}</td>
                    <td>
                        <x-buttons.action-buttons
                            :show="route('admin.shoes.show', $shoe->id)"
                            :edit="route('admin.shoes.edit', $shoe->id)"
                            :delete="route('admin.shoes.destroy', $shoe->id)"
                        />
                    </td>
                </tr>
            @empty
            @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-end">
        {{ $shoes->links() }}
    </div>
@endsection
