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
    <h1 class="h2">Users</h1>
    <hr>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Transactions</th>
                <th scope="col">Created At</th>
                <th scope="col">Last Updated At</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr class="align-middle">
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <div class="hstack gap-1">
                            @forelse($user->transactions as $transaction)
                                <a href="{{ route('admin.transactions.show', $transaction->id) }}"
                                   class="badge text-bg-dark">{{ $transaction->id }}</a>
                            @empty
                                -
                            @endforelse
                        </div>
                    </td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    @unless($user->is_admin)
                        <td>
                            <x-buttons.action-buttons
                                :show="route('admin.users.show', $user->id)"
                                :edit="route('admin.users.edit', $user->id)"
                                :delete="route('admin.users.destroy', $user->id)"
                            />
                        </td>
                    @endunless
                </tr>
            @empty
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
