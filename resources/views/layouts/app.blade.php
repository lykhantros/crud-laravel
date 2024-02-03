<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    CRUD LARAVEL 10
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        @foreach ($_menu as $_item)
                        @if ($_item->products->count())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/{{$_item->slug}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{$_item->name}}
                            </a>                            
                            <ul class="dropdown-menu">
                                @foreach ($_item->products->sortByDesc("name") as $__item)
                                <li><a class="dropdown-item" href="/{{$_item->slug}}/{{$__item->slug}}">{{$__item->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>    
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="/{{$_item->slug}}">{{$_item->name}}</a>
                        </li>
                        @endif
                        
                        @endforeach

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/category">Category</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

