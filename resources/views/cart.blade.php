@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
    <section class="container py-4">
        <h1 class="fw-bold fs-3">Shopping Cart</h1>
        @if($cart->items_count <= 0)
            <div class="mt-3">
                <p class="small">You have no items in your shopping cart.</p>
                <p class="small">Click <a href="{{ route('shoes') }}">here</a> to browse our shoes.</p>
            </div>
        @else
            <div class="table-responsive mb-3">
                <table class="table">
                    <thead>
                    <tr class="small">
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    @foreach($cart->stocks()->get() as $stock)
                        @php($randomId = Str::random(5))
                        <tr class="align-middle small text-nowrap">
                            <td>
                                <div class="hstack gap-2 align-items-center">
                                    <div style="width: 100px; height: 100px">
                                        <img class="img-fluid"
                                             src="{{ \Illuminate\Support\Facades\Storage::url($stock->shoe->images->first()->path) }}"
                                             alt="{{ $stock->shoe->name }}">
                                    </div>
                                    <div class="">
                                        <a href="{{ route('shoes.show', $stock->shoe->id) }}"
                                           class="d-block text-black text-uppercase fw-bold">{{ $stock->shoe->name }}</a>
                                        <div class="badge text-bg-secondary">US {{ $stock->size->us }}</div>
                                        <div class="mt-1 small">In
                                            Stock: {{ $stock->quantity }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>Rp. {{ number_format($stock->shoe->price, 0, ',', '.') }}</td>
                            <td>{{ $stock->pivot->quantity }}</td>
                            <td>Rp. {{ number_format($stock->pivot->quantity * $stock->shoe->price, 0, ',', '.') }}</td>
                            <td>
                                <div class="hstack gap-1">
                                    <button type="button" class="btn btn-sm btn-outline-dark" data-bs-toggle="modal"
                                            data-bs-target="#modal-edit-{{ $randomId }}">Edit
                                    </button>
                                    <div class="modal fade" id="modal-edit-{{ $randomId }}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content shadow">
                                                <div
                                                    class="modal-header p-5 pb-4 hstack align-items-center border-bottom-0">
                                                    <h5 class="fw-bold mb-0 fs-5">Edit <span
                                                            class="text-uppercase text-wrap">{{ $stock->shoe->name }}</span>
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body p-5 pt-0">
                                                    <form action="{{ route('cart.update', $stock->id) }}"
                                                          method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="form-floating mb-3">
                                                            <input type="number" class="form-control" id="floatingInput"
                                                                   value="{{ $stock->pivot->quantity }}" min="1"
                                                                   max="{{ $stock->quantity }}"
                                                                   name="quantity">
                                                            <label for="floatingInput">Quantity</label>
                                                        </div>
                                                        <button class="w-100 mb-2 btn btn-black" type="submit">Update
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <form action="{{ route('cart.delete', $stock->id) }}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-sm btn-outline-dark">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-3 mb-md-0">
                    <div class="card card-body p-4">
                        <h2 class="m-0 p-0 lh-1 fw-bold fs-5">Enter Your Personal Details</h2>
                        <hr>
                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul class="m-0 ps-3">
                                    @foreach($errors->all() as $error)
                                        <li class="small fw-bold">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form id="checkoutForm" action="{{ route('cart.checkout') }}" class="row" method="POST">
                            @csrf
                            <div class="col-md-12 mb-3">
                                <label for="name" class="form-label">Name <span class="text-danger">&ast;</span></label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="{{ old('name', auth()->user()->name) }}">
                                <div class="form-text small">The receiver name</div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="address" class="form-label">Address <span
                                        class="text-danger">&ast;</span></label>
                                <input type="text" class="form-control" name="address" id="address"
                                       placeholder="Receiver Address" required value="{{ old('address', '') }}">
                            </div>

                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="country" class="form-label">Country <span
                                        class="text-danger">&ast;</span></label>
                                <input type="text" class="form-control" name="country" id="country" disabled
                                       value="Indonesia">
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number <span
                                        class="text-danger">&ast;</span></label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                       placeholder="Phone Number"
                                       required value="{{ old('phone', '') }}">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-body p-4">
                        <h2 class="m-0 p-0 lh-1 fw-normal fs-5">Summary</h2>
                        <hr>
                        <div class="hstack justify-content-between">
                            <strong>Grand Total</strong>
                            <strong>Rp. {{ number_format($cart->getTotalPrice(), 0, ',', '.') }}</strong>
                        </div>
                        <hr>
                        <div class="mb-2">
                            <small class="d-block mb-1">Please input <strong>{{ $code }}</strong> as checkout
                                code</small>
                            <input form="checkoutForm" type="hidden" name="code_confirmation" id="code_confirmation"
                                   value="{{ $code }}">
                            <input form="checkoutForm" type="text" name="code" id="code"
                                   class="form-control" placeholder="XXXXXX"
                                   required>
                        </div>

                        <div class="d-grid">
                            <button form="checkoutForm" type="submit" class="btn btn-black">Proceed to checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>

    @if(session()->has('message'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast" role="alert" data-bs-delay="3000">
                <div class="toast-header text-bg-dark">
                    <i class="bi bi-bell me-2"></i>
                    <strong class="me-auto">Notification</strong>
                    <i class="bi bi-x-square-fill fs-5 text-danger" role="button" data-bs-dismiss="toast"></i>
                </div>
                <div class="toast-body">
                    {{ session()->get('message') }}
                </div>
            </div>
        </div>
    @endif
@endsection
