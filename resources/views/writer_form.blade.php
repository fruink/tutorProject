<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <link href="{{ asset('css/main.css') }}" rel="stylesheet">
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

      

    </head>
    <body>


        @include('nav')



        <div class="flex-center position-ref full-height">
        <div id="errors">
        @if($errors->any())
        <h3>some errors were found:</h3>
        <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        @endif
        </div>
                
        <div class="content">
        <h3>Add an Writer</h3>
        <form method="post" action="{{ url('writers/add') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        Name: <input type="text" name="writname" id="writname" value="{{ old('writname') }}"><br>
        Title: <input type="text" name="title" id="title" value="{{ old('title') }}"><br>
        Country: <input type="text" name="country" id="country" value="{{ old('country') }}"><br>
        Biography: <input type="text" name="bio" id="bio" value="{{ old('bio') }}"><br>
            
        Photo: <input type="file" name="photo" id="photo"><br>
        <input type="submit" value="add">
        </form>
                
        </div>
        </div>
            
            <!-- JavaScript file is in public folder pointing to routes-->
         <script type="text/javascript" src="{{ url('/') }}/js/main.js"></script>
          <!-- bootstrap nav library -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        </body>
    </html>
