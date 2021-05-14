
@extends('layouts.main')

@section('content')

    <h1>BEST MOVIES</h1>

    <div class="container">
        @foreach ($movies as $movie)
        <div class="card">
            <a href={{route("movies.show", ['movie'=> $movie->id])}}><img class="cover" src={{$movie->img}} alt="Copertina di {{$movie->title}}"></a>
            <div class="card-info">
                <h2><em>{{$movie->title}}</em></h2>
                <h3>Director: {{$movie->director}}</h3>
                <p><em>Genre</em>: {{$movie->genre}}</p>
                <p><em>Synopsis</em>: {{$movie->synopsis}}</p>
                <a href={{route("movies.show", ['movie'=> $movie->id])}}><strong><em>Go to Movie Details</em></strong></a>
            </div>
        </div>
        @endforeach
    </div>

@endsection
