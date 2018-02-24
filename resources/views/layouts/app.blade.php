<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    {{-- Tell IE to render web page with the newest model --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>@yield('title', 'LaraBBS') - Practice</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app" class="{{route_class()}}-page">
        @include('layouts._header')
            <div class="comtainer">
                @yield('content')
            </div>
        @include('layouts._footer')
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
