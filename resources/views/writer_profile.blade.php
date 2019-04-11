<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <link href="{{ asset('css/main.css') }}" rel="stylesheet">

       

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

       
    </head>
    <body>

        @include('nav')


        <div class="flex-center position-ref full-height">

          

          

            <div class="content">

                        <h3>{{ $writer->name }}</h3>
                        
                        <p>{{ $writer->bio }}</p>
                        <p>{{ $writer->country }}</p>
                        <p><img src="{{ url('/') }}/storage/{{ $writer->writer_photo }}" alt="writer photo"></p>
                        <ul>
                            @for($i=0; $i< count($writer->scripts); $i++) 

                            <li>{{ $writer->scripts[$i]->title}}</li>
                            <li>{{ $writer->scripts[$i]->genre}}</li>
                            <li>{{ $writer->scripts[$i]->year}}</li>
                            <br><br>
                            @endfor 
                        </ul>
                        <p>

                         <br>

                        <h3>Add a Script</h3>


                        <form method="post" action="{{ url('scripts/script/add') }}">
                        {{ csrf_field() }}
                        Title: <input type="text" name="scripttitle" id="scripttitle" value="{{ old('scripttitle') }}"><br>
                        Year: <input type="text" name="year" id="year" value="{{ old('year') }}"><br>

                        Genre: <input type="text" name="genre" id="genre" value="{{ old('genre') }}"><br>
                        Storyline: <input type="text" name="storyline" id="storyline" value="{{ old('storyline') }}"><br>
                        <input type="hidden" name="writid" id="writid" value="{{ $writer->id }}"><br>

                      
                        <input type="submit" value="add">
                        </form>
                          <p>
                        @if($errors->any())
                        <h3>Some errors were found:</h3>
                        <ul>
                           @foreach($errors->all() as $error)
                           <li>{{ $error }}</li> 
                           @endforeach    
                        </ul>    
                        @endif
                        </p>
</p>
                        <p class="back"><a href="{{ url('/writers') }}">back</a></p>
            </div>
        </div>
        <!-- JavaScript file is in public folder pointing to routes-->
         <script type="text/javascript" src="{{ url('/') }}/js/main.js"></script>
          <!-- bootstrap nav library -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
