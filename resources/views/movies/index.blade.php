
@extends('layouts.main')

@section('pageTitle')
    Lista dei nostri film
@endsection

@section('content')

<table class="table table-striped">
    <div class="text-right mb-3">
        <a href={{route('movies.create')}}><button type='button' class='btn btn-success text-right'>Aggiungi un Film</button></a>
    </div>
    <thead>
        <tr>
            <th>ID</th>
            <th>Immagine</th>
            <th scope="col">Titolo</th>
            <th scope="col">Regista</th>
            <th scope="col">Generi</th>
            <th scope="col">Anno</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($movies as $movie)
        <tr>
            <td>{{$movie->id}}</td>
            <td><img src="{{$movie->cover}}" alt="{{$movie->title}}"</td>
            <td>{{$movie->title}}</td>
            <td>{{$movie->director}}</td>
            <td>{{$movie->genres}}</td>
            <td>{{$movie->year}}</td>
            <td>
                <a href="{{route('movies.show', [ 'movie' => $movie->id ])}}"><button type="button" class="btn btn-primary mr-3">Visualizza</button></a>
				<a href="{{route('movies.edit', [ 'movie' => $movie->id ])}}"><button type="button" class="btn btn-primary">Modifica</button></a>
				<form action="{{route('movies.destroy', [ 'movie' => $movie->id ])}}" method="POST">
                    @csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger mt-4 delete-btn">Elimina</button>
				</form>
            </td>
        </tr>        
    @endforeach
    </tbody>
</table>
@if (session('message'))
    <div class="alert alert-success pop-up">
        {{ session('message') }}
    </div>
@endif

@endsection
