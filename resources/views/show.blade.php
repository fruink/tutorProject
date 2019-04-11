@extends('app')


    @section('content')
  		<a href="/posts" class="btn">Back</a>

     <!-- http://localhost:8000/userPosts/1 -->
	<h1>{{$UserPost->title}}</h1>
	<div class="selectedPost">
		<h3>{{$UserPost->subject}}</h3>
		
		
	
		<p>{{$UserPost->body}}</p>
		<h5>Created on {{$UserPost->created_at}} by {{$UserPost->user->name}}</h5>
	</div>

     


@endsection