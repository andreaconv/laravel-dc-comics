@extends('layout.main')

@section('content')

  <div class="container">
    <h1>{{ $comic->title }}</h1>

    @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>

          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach

        </ul>
      </div>

    @endif

    <form action="{{ route('comics.update', $comic) }}" method="POST">
      {{-- token di verifica validità del form  --}}
      @csrf
      {{-- da aggiungere perché non è possibile mettere PUT/PATCH in method in HTML  --}}
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $comic->title) }}" placeholder="Titolo">
        @error('title')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
          <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Descrizione">{{ old('description', $comic->description) }}</textarea>
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Percorso Immagine</label>
        <input type="text" class="form-control" name="thumb" id="thumb" value="{{ old('thumb', $comic->thumb) }}" placeholder="Percorso Immagine">
      </div>

      <div class="d-flex justify-content-between">

        <div class="mb-3 d-inline-block">
          <label for="price" class="form-label">Prezzo</label>
          <input type="text" class="form-control" name="price" id="price" value="{{ old('price', $comic->price) }}" placeholder="Prezzo">
          @error('price')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-3 d-inline-block">
          <label for="series" class="form-label">Serie</label>
          <input type="text" class="form-control" name="series" id="series" value="{{ old('series', $comic->series) }}" placeholder="Serie">
        </div>

        <div class="mb-3 d-inline-block">
          <label for="sale_date" class="form-label">Data di uscita</label>
          <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" placeholder="Data di uscita">
        </div>

        <div class="mb-3 d-inline-block">
          <label for="type" class="form-label">Tipo</label>
          <input type="text" class="form-control" name="type" id="type" value="{{ old('type', $comic->type) }}" placeholder="Tipo">
        </div>

      </div>


      <div class="mb-3">
        <label for="artists" class="form-label">Artisti</label>
        <input type="text" class="form-control" name="artists" id="artists" value="{{ old('artists', $comic->artists) }}" placeholder="Artisti">
      </div>

      <div class="mb-3">
        <label for="writers" class="form-label">Scrittori</label>
        <input type="text" class="form-control" name="writers" id="writers" value="{{ old('writers', $comic->writers) }}" placeholder="Scrittori">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection
