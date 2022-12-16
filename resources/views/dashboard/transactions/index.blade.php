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
    <h1 class="h2">Transactions</h1>
    <hr>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User</th>
                <th scope="col">Orders Count</th>
                <th scope="col">Created At</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($transactions as $transaction)
                <tr class="align-middle">
                    <th scope="row">{{ $transaction->id }}</th>
                    <td>{{ $transaction->user->name }} <a
                            href="{{ route('admin.users.show', $transaction->user->id) }}"><span
                                class="feather-sm" data-feather="link-2"></span></a></td>
                    <td>{{ $transaction->orders()->count() }}</td>
                    <td>{{ $transaction->created_at }}</td>
                    <td>
                        <x-buttons.action-buttons
                            :show="route('admin.transactions.show', $transaction->id)"
                            :delete="route('admin.transactions.destroy', $transaction->id)"
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
