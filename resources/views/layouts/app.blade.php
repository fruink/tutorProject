<!-- 


http://localhost:8000/login




 -->



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     


</head>
<body>
    
        @include('nav')

        <main class="py-4">
            @yield('content')
        </main>


      
            <!-- JavaScript file is in public folder pointing to routes-->
         <script type="text/javascript" src="{{ url('/') }}/js/main.js"></script>
            <!-- text editor for creating posts as users will need to be able to make atleast basic adjustments to fonts and etc... link to a js library free of charge from laravel editor ck on github. I'll make sure to give credit for using this component in my thesis. url link is = https://github.com/UniSharp/laravel-ckeditor -->
            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'article-ckeditor' );
            </script>



    </div>
</body>
</html>
