

@extends('layouts.main')

@section('pageTitle')
	Inserisci un nuovo Film
@endsection

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('movies.store')}}" method="POST">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="cover">Immagine Cover</label>
        <input type="text" class="form-control" id="cover" name="cover" placeholder="URL Immagine" value="{{ old('cover') }}">
    </div>
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="director">Regista</label>
        <input type="text" class="form-control" id="director" name="director" placeholder="Regista" value="{{ old('director') }}">
    </div>
    <div class="form-group">
        <label for="genres">Generi</label>
        <input type="text" class="form-control" id="genres" name="genres" placeholder="Generi" value="{{ old('genres') }}">
    </div>
    <div class="form-group">
        <label for="plot">Trama</label>
        <textarea class="form-control" id="plot" name="plot" rows="8" placeholder="Trama...">{{ old('plot') }}</textarea>
    </div>
    <div class="form-group">
        <label for="year">Anno</label>
        <select class="form-control" id="year" name="year">
            @for ($i = 1900; $i <= date("Y") + 1; $i++)
                <option value="{{$i}}" {{ $i == old('year') ? 'selected' : '' }}>{{$i}}</option>
            @endfor
        </select>
    </div>

    <button type="submit" class="btn btn-primary mb-3">Salva</button>
</form>
@endsection