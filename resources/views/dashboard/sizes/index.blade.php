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
    <h1 class="h2">Sizes</h1>
    <hr>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">US</th>
                <th scope="col">UK</th>
                <th scope="col">EUR</th>
                <th scope="col">CM</th>
                <th scope="col">Created At</th>
                <th scope="col">Last Updated At</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($sizes as $size)
                <tr class="align-middle">
                    <th scope="row">{{ $size->id }}</th>
                    <td>{{ floatval($size->us) }}</td>
                    <td>{{ floatval($size->uk) }}</td>
                    <td>{{ floatval($size->eur) }}</td>
                    <td>{{ floatval($size->cm) }}</td>
                    <td>{{ $size->created_at }}</td>
                    <td>{{ $size->updated_at }}</td>
                    <td>
                        <x-buttons.action-buttons
                            :show="route('admin.sizes.show', $size->id)"
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
