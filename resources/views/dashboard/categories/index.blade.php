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
    <h1 class="h2">Categories</h1>
    <hr>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3">
        <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-primary">
            <span data-feather="plus" class="align-text-bottom feather-sm"></span>
            New Data
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Last Updated At</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr class="align-middle">
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>
                        <x-buttons.action-buttons
                            :show="route('admin.categories.show', $category->id)"
                            :edit="route('admin.categories.edit', $category->id)"
                            :delete="route('admin.categories.destroy', $category->id)"
                        />
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No Data</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
