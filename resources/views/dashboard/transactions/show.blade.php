@extends('dashboard.layouts.app')

@section('title', 'Transaction: ' . $transaction->id)

@section('content')
    <h1 class="h2">Transaction: {{ $transaction->id }}</h1>
    <hr>

    <div class="mb-3 hstack gap-2">
        <a href="{{ route('admin.transactions.index') }}" class="btn btn-sm btn-secondary">Back</a>
        <x-buttons.action-buttons
            :show="route('admin.transactions.show', $transaction->id)"
        />
    </div>

    <div class="row row-cols-2 mb-3">
        <div>
            <label for="user_name" class="form-label">User Name</label>
            <input disabled type="text" class="form-control" id="user_name" name="user_name"
                   value="{{ $transaction->user->name }}">
        </div>

        <div>
            <label for="user_email" class="form-label">User Email</label>
            <input disabled type="email" class="form-control" id="user_email" name="user_email"
                   value="{{ $transaction->user->email }}">
        </div>
    </div>

    <div class="mb-3">
        <div class="form-label">Orders</div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($transaction->orders as $order)
                            <tr class="align-middle text-nowrap">
                                <td>
                                    <div class="hstack gap-2 align-items-center">
                                        <div style="width: 100px; height: 100px">
                                            <img class="img-fluid"
                                                 src="{{ \Illuminate\Support\Facades\Storage::url($order->image) }}"
                                                 alt="{{ $order->name }}">
                                        </div>
                                        <div class="">
                                            <div
                                                class="d-block text-uppercase fw-bold">{{ $order->name }}</div>
                                            <div class="badge text-bg-secondary">US {{ $order->size }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>Rp. {{ number_format($order->price, 0, ',', '.') }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>Rp. {{ number_format($order->quantity * $order->price, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">Total price:
                <strong>Rp. {{ number_format($transaction->getTotalPrice(), 0, ',', '.') }}</strong></div>
        </div>
    </div>
@endsection
