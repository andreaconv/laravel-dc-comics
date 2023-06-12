@extends('layout.main')

@section('content')

  <div class="container">
    <h1>Comics</h1>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Titolo</th>
          <th>Serie</th>
          <th>Azione</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
          <tr>
            <th scope="row">{{ $comic->id}}</th>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->series }}</td>
            <td><a href="{{ route('comics.show', $comic) }}" class="btn btn-success">Vai</a></td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>

@endsection