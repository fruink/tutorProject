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


        	<div class="container">
			    <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-10">
				
						
						
					   
                    

						 <ul>
                        @foreach($writers as $writer)
                        <li class="writers">
                            <i class="fas fa-pen"></i>
                            <br>
                        	<a class="writers" href="{{ url('writers/show/') }}/{{ $writer->id }}">{{ $writer->name }}:</a>
                       
                        	<a class="writers" href="{{ url('writers/show/') }}/{{ $writer->id }}">{{ $writer->title }}</a> 
                        	<h5><a href="{{ url('writers/drop') }}/{{ $writer->id }}">delete</a></h5>
                        </li>
                        @endforeach
                        </ul>

                    -->

					
					 <p class="addWrit"><a href="{{ url('writers/new') }}">add writer</a></p>


            </div>
			    
		</div>
    </div>
        
        <!-- JavaScript file is in public folder pointing to routes-->
         <script type="text/javascript" src="{{ url('/') }}/js/main.js"></script>
          <!-- bootstrap nav library -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </body>
</html>