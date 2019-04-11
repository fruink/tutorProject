@extends('app')


    @section('content')
  		<a href="/posts" class="btn">Back</a>

     <!-- http://localhost:8000/posts/create -->
	<h1>Create a Post</h1>

    {!! Form::open(['action' => ['UserPostsController@update', $UserPost->id], 'method' => 'POST']) !!}
		
		<div class="form">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', $UserPost->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
		</div>
		
		<div class="form">
			{{Form::label('subject', 'Subject')}}
			{{Form::text('subject', $UserPost->subject, ['class' => 'form-control', 'placeholder' => 'Subject'])}}
		</div>
		<div class="form">
			{{Form::label('body', 'Body')}}
			{{Form::textarea('body', $UserPost->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
		</div>

		{{Form::hidden('_method', 'PUT')}}
		{{Form::submit('Submit', ['class'=>'btn'])}}

    {!! Form::close() !!}
    


@endsection