<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">



         <link href="{{ asset('css/main.css') }}" rel="stylesheet">
          <!-- Styles -->
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        
        
        
     

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    </head>
    <body>




                    @include('nav')


                    <div id="container">

                    
                    @include('messagealerts')


                     @yield('content')

                    </div>
              



         <!-- JavaScript file is in public folder pointing to routes-->
         <script type="text/javascript" src="{{ url('/') }}/js/main.js"></script>

         <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>


        <!-- text editor for creating posts as users will need to be able to make atleast basic adjustments to fonts and etc... link to a js library free of charge from laravel editor ck on github. I'll make sure to give credit for using this component in my thesis. url link is = https://github.com/UniSharp/laravel-ckeditor -->
            <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'article-ckeditor' );
            </script>



    </body>
</html>
