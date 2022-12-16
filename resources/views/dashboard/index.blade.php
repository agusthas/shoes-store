@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Income (Total)
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Rp. {{ number_format($transactions->map(function ($tr) { return $tr->getTotalPrice(); })->sum(), 0, ',', '.') }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <span class="feather-lg text-secondary" data-feather="dollar-sign"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Transactions
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $transactions->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <span class="feather-lg text-secondary" data-feather="file-text"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Orders
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $transactions->sum('orders_count') }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <span class="feather-lg text-secondary" data-feather="shopping-bag"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Users
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $users->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <span class="feather-lg text-secondary" data-feather="users"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <canvas id="myChart"></canvas>
    </div>
@endsection
