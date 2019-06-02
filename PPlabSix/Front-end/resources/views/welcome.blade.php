<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content=""/>
        <link href="css/square.css" rel="stylesheet"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <canvas id="pixie"></canvas>

    
            <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
            <script src="js/parallaxsoon4.js" type="text/javascript"></script>
            <div class="content">
                <div class="flex-center position-ref full-height">
                <div class="title m-b-md">
                    СИСТЕМА ТЕСТИРОВАНИЯ
                </div>
                <div class="links">
                    <a href="/newtest" class="button21">Создать тест</a>
                </div>
                
    </body>
</html>
