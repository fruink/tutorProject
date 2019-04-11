@extends('app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>

<a href="/posts/create" class="btn">Creat a Post</a>
                
<a href="/UserProfile/create" class="btn">Create a Profile (need to create this ASAP)</a>

                

<!-- Livesearch for tutors, posts, etc... -->





<div id="searchForTutors">
<h2 class="hidden">Live Search for Tutors</h2>
<h2 class="searchHeading">Search for your Perfect Tutor!</h2>

<form class="sm-12 lg-12 id="form">
<label for="searchEngine"></label>
<input type="search" name="searchEngine" id="searchEngine" placeholder="Search Tutors or Students Here!">
</form>

<br>

<div id="writersInfo">
<p>Search Result will be listed here.</p>
</div>


</div>




<!-- Login home page -->
<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

You are logged in!
</div>


@if(count($posts) > 0)
<div class="changeUserPost">
                    
                
@foreach($posts as $post)
                        
<h2>{{$post->title}}</h2>
<a href="/posts/{{$post->id}}/edit" class="btn">Edit</a>

<hr>
                        
{!!Form::open(['action' => ['UserPostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'button'])!!}

{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'button-del'])}}

{!!Form::close()!!}

@endforeach

</div>

@else
<p>You have not created any posts.</p>
<h4><a href="/posts/create" class="btn">Creat a Post</a></h4>
@endif


</div>
</div>
</div>
</div>
@endsection
