@extends('layout.main')

@section('content')

  <div class="container">
    <h1>Comics</h1>

    @if (session('deleted'))
      <div class="alert alert-success" role="alert">
        {{ session('deleted') }}
      </div>
    @endif

    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th>Id</th>
          <th>Titolo</th>
          <th>Serie</th>
          <th>Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
          <tr>
            <th scope="row">{{ $comic->id}}</th>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->series }}</td>
            <td>
              <a href="{{ route('comics.show', $comic) }}" class="btn btn-success" title="Visualizza">Vai</a>
              <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning" title="Modifica">Modifica</a>

              <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="d-inline" onsubmit="return confirm('Confermi l\'eliminazione del prodotto: {{ $comic->title }} ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" title="Elimina">Elimina</button>
              </form>
            </td>

          </tr>
        @endforeach

      </tbody>
    </table>

    <div>{{ $comics->links() }}</div>
  </div>

@endsection
