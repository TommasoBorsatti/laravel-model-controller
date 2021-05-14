
@extends('layouts.main')

@section('content')

    <h1>MOVIE DETAILS</h1>
    <div class="container">
        <div class="column">
            <img class="big-cover" src={{$movie->img}} alt={{$movie->title}}>
            <div class="column-info">
                <h2><em>{{$movie->title}}</em></h2>
                <h3>Genre: {{$movie->genre}}</h3>
                <p>Plot: {{$movie->plot}}</p>
                <a href={{route("movies.index")}}><strong>Go back to Best Movie list</strong></a>
            </div>   
        </div>
    </div>

@endsection