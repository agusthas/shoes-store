<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
        {{-- Nav Heading --}}
        <a class="navbar-brand mb-0 h1" href="{{ route('home') }}">Shoes Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- Nav Content --}}
        <div class="collapse navbar-collapse" id="navContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ Route::is('about') ? 'active text-danger' : '' }}"
                       href="{{ route('about') }}">{{ __('About Us') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ Route::is('shoes') ? 'active text-danger' : '' }}"
                       href="{{ route('shoes') }}">{{ __('Shoes') }}</a>
                </li>
            </ul>
            <ul class="navbar-nav mt-3 mt-md-0 gap-2">
                @auth
                    <li class="nav-item">
                        <a class="btn btn-sm btn-outline-light fw-bold position-relative" type="button"
                           href="{{ route('cart') }}">
                            <i class="bi bi-cart-fill me-1"></i>
                            Cart
                            <span
                                class="badge text-bg-danger ms-1">{{ auth()->user()->cart->items_count }}</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-sm btn-outline-light dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" role="button">
                            <strong>{{ auth()->user()->name }}</strong>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item d-flex gap-2 align-items-center"
                                   href="{{ route('transactions') }}">
                                    <i class="bi bi-file-earmark-text"></i>
                                    Transactions
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit"
                                            class="dropdown-item d-flex gap-2 align-items-center text-danger">
                                        <i class="bi bi-box-arrow-right"></i>
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-sm btn-outline-light" type="button" href="{{ route('login') }}">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
