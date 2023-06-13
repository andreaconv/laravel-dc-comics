@extends('layout.main')

@section('content')

  <div class="container">
    <h1>Nuovo Fumetto</h1>

    {{-- FIXME: I messaggi generati sono in inglese!! --}}
    @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>

          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach

        </ul>
      </div>

    @endif

    <form action="{{ route('comics.store') }}" method="POST">
      {{-- token di verifica validità del form  --}}
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input
          type="text"
          class="form-control @error('title') is-invalid @enderror"
          name="title"
          id="title"
          value="{{ old('title') }}"
          placeholder="Titolo">

        @error('title')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
          <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Descrizione">{{ old('description') }}</textarea>
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Percorso Immagine</label>
        <input type="text" class="form-control" name="thumb" id="thumb" value="{{ old('thumb') }}" placeholder="Percorso Immagine">
      </div>

      <div class="d-flex justify-content-between">

        <div class="mb-3 d-inline-block">
          <label for="price" class="form-label">Prezzo</label>
          <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price') }}" placeholder="Prezzo">
          @error('price')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-3 d-inline-block">
          <label for="series" class="form-label">Serie</label>
          <input type="text" class="form-control" name="series" id="series" value="{{ old('series') }}" placeholder="Serie">
        </div>

        <div class="mb-3 d-inline-block">
          <label for="sale_date" class="form-label">Data di uscita</label>
          <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{ old('sale_date') }}" placeholder="Data di uscita">
        </div>

        <div class="mb-3 d-inline-block">
          <label for="type" class="form-label">Tipo</label>
          <input type="text" class="form-control" name="type" id="type" value="{{ old('type') }}" placeholder="Tipo">
        </div>

      </div>


      <div class="mb-3">
        <label for="artists" class="form-label">Artisti</label>
        <input type="text" class="form-control" name="artists" id="artists" value="{{ old('artists') }}" placeholder="Artisti">
      </div>

      <div class="mb-3">
        <label for="writers" class="form-label">Scrittori</label>
        <input type="text" class="form-control" name="writers" id="writers" value="{{ old('writers') }}" placeholder="Scrittori">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection
