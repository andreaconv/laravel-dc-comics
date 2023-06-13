@extends('layout.main')

@section('content')

  <div class="container">
    <h1>Comics</h1>

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
              <a href="{{ route('comics.show', $comic) }}" class="btn btn-success">Vai</a>
              <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">Modifica</a>
            </td>

          </tr>
        @endforeach

      </tbody>
    </table>

    <div>{{ $comics->links() }}</div>
  </div>

@endsection
