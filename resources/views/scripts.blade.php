@extends('template')

@include('nav')

@section('content')


                    <ul>
                        @foreach($scripts as $script)


						
                        <li>{{ $script->title }}</li>
                        <li>{{ $script->genre }}</li>
                        <li>{{ $script->year }}</li>
                        <li>{{$script->created_at}}</li>

                        @endforeach
                    </ul>
@endsection