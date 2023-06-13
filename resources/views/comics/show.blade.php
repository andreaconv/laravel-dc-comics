@extends('layout.main')

@section('content')

{{-- TODO: modificare il css per la gestione display: l'immagine streccia se la descrizione è lunga --}}

  <div class="container d-flex py-5">
    <img src="{{ $comic->thumb }}" class="card-img-top" style="width: 18rem;" alt="comic">

    <div class="details px-4">

      <table class="table table-dark">
        <thead>
          <tr>
            <th>Titolo</th>
            <th>Prezzo</th>
            <th>Data Uscita</th>
            <th>Tipologia</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $comic->title}}</th>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
          </tr>
        </tbody>
      </table>

      <h3>Descrizione</h3>
      <p>{{ $comic->description }}</p>

      <h4>Artisti</h4>
      {{-- TODO: fare l'explode dell'array, aggiustare l'elenco separato dal | pipe --}}
      <p>{{ $comic->artists }}</p>
      {{-- <p>{{  explode("|",$comic->artists)}}</p> --}}

      <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna ai fumetti</a>
      <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">Modifica</a>

      <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="d-inline" onsubmit="return confirm('Confermi l\'eliminazione del prodotto: {{ $comic->title }} ?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" title="Elimina">Elimina</button>
      </form>

    </div>

  </div>

@endsection
