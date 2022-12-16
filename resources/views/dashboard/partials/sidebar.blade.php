<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky d-flex flex-column">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}" aria-current="page"
                   href="{{ route('admin.dashboard') }}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex px-3 mt-4 mb-1 text-muted text-uppercase">Shoes</h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.brands.index') ? 'active' : '' }}"
                   href="{{ route('admin.brands.index') }}">
                    <span data-feather="table" class="align-text-bottom"></span>
                    Brands
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.categories.index') ? 'active' : '' }}"
                   href="{{ route('admin.categories.index') }}">
                    <span data-feather="table" class="align-text-bottom"></span>
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.styles.index') ? 'active' : '' }}"
                   href="{{ route('admin.styles.index') }}">
                    <span data-feather="table" class="align-text-bottom"></span>
                    Styles
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.sizes.index') ? 'active' : '' }}"
                   href="{{ route('admin.sizes.index') }}">
                    <span data-feather="table" class="align-text-bottom"></span>
                    Sizes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.shoes.index') ? 'active' : '' }}"
                   href="{{ route('admin.shoes.index') }}">
                    <span data-feather="table" class="align-text-bottom"></span>
                    Shoes
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex px-3 mt-4 mb-1 text-muted text-uppercase">Data</h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.transactions.index') ? 'active' : '' }}"
                   href="{{ route('admin.transactions.index') }}">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Transactions
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.users.index') ? 'active' : '' }}"
                   href="{{ route('admin.users.index') }}">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Users
                </a>
            </li>
        </ul>

        <div class="p-3 mt-auto">
            <hr>
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        role="button">
                    <strong>{{ auth()->user()->name }}</strong>
                </button>
                <ul class="dropdown-menu text-small shadow">
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex gap-2 align-items-center">
                                <span class="feather-sm text-danger" data-feather="log-out"></span>
                                Sign out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
