<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @hasSection('title')
            @yield('title')
        @else
            Dashboard
        @endif
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Tiny MCE -->
    <x-heads.tinymce-config/>
</head>
<body>
<div id="app">
    @include('dashboard.partials.header')
    <div class="container-fluid">
        <div class="row">
            @include('dashboard.partials.sidebar')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3 pb-2 mb-3">
                @yield('content')
            </main>
        </div>
    </div>
    @hasSection('toast')
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            @yield('toast')
        </div>
    @endif
</div>
<script>
    feather.replace()
</script>
@stack('scripts')
</body>
</html>
