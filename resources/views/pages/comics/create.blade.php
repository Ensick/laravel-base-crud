@extends('layouts.app')

@section('page-title', 'DC-Comics-Create')

@section('main-content')

    <h1>Form per la create</h1>

    <form method="POST" action="{{route('comics.store')}}">

        <div class="mb-3">
          <label class="form-label">Titolo</label>
          <input name="title" type="email" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="description"  class="form-control" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Carica Foto</label>
            <input name="thumb" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input name="price" type="text" class="form-control">
        </div>

        <div class="mb-3">
        <label class="form-label">Serie</label>
        <input name="series" type="text" class="form-control">
        </div>

        <div class="mb-3">
        <label class="form-label">Uscita</label>
        <input name="sale_date" type="text" class="form-control">
        </div>

        <div class="mb-3">
        <label class="form-label">Genere</label>
        <input name="type" type="text" class="form-control">
        </div>


        <button type="submit" class="btn btn-primary">Pubblica!</button>
    </form>
@endsection
