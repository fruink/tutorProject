
@extends('app')

    @section('content')
        

        <section id="welcome">
        <div class="flex-center position-ref full-height">
            

        <div class="row contentBack">
            <div class="container">
                <div class="row">
                   <div class="col-sm-12 text-left">
                    <h3 class="fadedText">Tutor?</h3>
                   <h3 class="title"> {{ $title }} </h3>

                   </div>

                <div class="introPage">
                     <!-- directs the user to the login page where they must log in or create an account before using app -->
                    <p class="slogan">
                       <a href="/home" class="msg">Find the perfect tutor for you!</a>
                  </p>
                </div>


             
               </div>
             </div>
        </div>
        </div>
    </section>


         <!-- JavaScript file is in public folder pointing to routes-->
         <script type="text/javascript" src="{{ url('/') }}/js/main.js"></script>

@endsection
