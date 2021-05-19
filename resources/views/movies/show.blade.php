
@extends('layouts.main')

@section('pageTitle')
	{{$movie->title}}
@endsection

@section('content')
    <img class="mb-3" src="{{$movie->cover}}" alt={{$movie->title}}>
    <h2>{{$movie->director}}</h2>
	<h2>{{$movie->year}}</h2>
	<p class="text-justify">{{$movie->plot}}</p>
	<a href="{{route('movies.index')}}"><button type="button" class="btn btn-primary mb-3">Torna all'home page</button></a>
@endsection