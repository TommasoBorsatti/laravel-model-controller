
@extends('layouts.main')

@section('pageTitle')
    Lista dei nostri film
@endsection

@section('content')

<table class="table">
    <thead>
        <tr>
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
            <td><img src="{{$movie->cover}}" alt="{{$movie->title}}" style="width: 100px"></td>
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
					<button type="submit" class="btn btn-danger mt-4">Elimina</button>
				</form>
            </td>
        </tr>        
    @endforeach
    </tbody>
</table>
@if (session('message'))
    <div class="alert alert-success" style="position: fixed; bottom: 30px; right: 30px">
        {{ session('message') }}
    </div>
@endif

@endsection
