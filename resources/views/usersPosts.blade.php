@extends('app')


    @section('content')
  
           <a href="/posts/create" class="btn">Create a Post</a>

           <a href="/home" class="btn">Home</a>


                    <h1>POST PAGE</h1>


                   @if(count($user_posts) > 0)

                   @foreach($user_posts as $user_post)

                   <div class="well">
                   	<h2><a href="posts/{{$user_post->id}}">{{$user_post->title}}</a></h2>


                   	<h4>{{$user_post->subject}}</h4>

                   	<h5>Created on {{$user_post->created_at}} by {{$user_post->user->name}}</h5>
                   </div>

                   @endforeach

                   <!-- here is the paginate link -->
                    {{$user_posts->links()}}



                   @else
						      <p>There are no posts found.</p>
                   @endif


@endsection