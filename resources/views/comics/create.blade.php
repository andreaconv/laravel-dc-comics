@extends('layout.main')

@section('content')

  <div class="container">
    <h1>Nuovo Fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
      {{-- token di verifica validità del form  --}}
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titolo">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
          <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Descrizione"></textarea>
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Percorso Immagine</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Percorso Immagine">
      </div>

      <div class="d-flex justify-content-between">

        <div class="mb-3 d-inline-block">
          <label for="price" class="form-label">Prezzo</label>
          <input type="text" class="form-control" name="price" id="price" placeholder="Prezzo">
        </div>

        <div class="mb-3 d-inline-block">
          <label for="series" class="form-label">Serie</label>
          <input type="text" class="form-control" name="series" id="series" placeholder="Serie">
        </div>

        <div class="mb-3 d-inline-block">
          <label for="sale_date" class="form-label">Data di uscita</label>
          <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Data di uscita">
        </div>

        <div class="mb-3 d-inline-block">
          <label for="type" class="form-label">Tipo</label>
          <input type="text" class="form-control" name="type" id="type" placeholder="Tipo">
        </div>

      </div>


      <div class="mb-3">
        <label for="artists" class="form-label">Artisti</label>
        <input type="text" class="form-control" name="artists" id="artists" placeholder="Artisti">
      </div>

      <div class="mb-3">
        <label for="writers" class="form-label">Scrittori</label>
        <input type="text" class="form-control" name="writers" id="writers" placeholder="Scrittori">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection
