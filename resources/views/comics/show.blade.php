@extends('layout.main')

@section('content')

{{-- TODO: modificare il css per visualizzare meglio  il singolo fumetto come l'esercizio precedente --}}

  <div class="container d-flex py-5">
    <img src="{{ $comic->thumb }}" class="card-img-top" style="width: 18rem;" alt="...">
    <div class="card"">
      <div class="card-body">
        <h5 class="card-title">{{ $comic->title }}</h5>
        <p class="card-text">{{ $comic->description }}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"> Prezzo {{ $comic->price }}</li>
        <li class="list-group-item">Serie {{ $comic->series }}</li>
        <li class="list-group-item">Data Uscita{{ $comic->sale_date }}</li>
        <li class="list-group-item">Tipologia {{ $comic->type }}</li>
      </ul>
      <div class="card-body">
        <a href="{{ route('comics.index') }}" class="btn btn-success">Torna ai fumetti</a>
      </div>
    </div>
  </div>

@endsection
