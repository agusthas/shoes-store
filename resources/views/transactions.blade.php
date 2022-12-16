@extends('layouts.app')

@section('title', 'Transactions')

@section('content')
    <section class="container py-4">
        <h1 class="fw-bold fs-3">Transactions History</h1>
        @foreach($transactions as $transaction)
            <div class="mt-3">
                <div class="card">
                    <div
                        class="card-header text-bg-danger fw-bold">{{ \Carbon\Carbon::parse($transaction->created_at)->format('D, d M Y H:i:s') }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                <tr class="small">
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transaction->orders as $order)
                                    <tr class="align-middle small text-nowrap">
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
                </div>
            </div>
        @endforeach
    </section>
@endsection
