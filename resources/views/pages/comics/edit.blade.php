@extends('layouts.app')

@section('page-title', 'DC-Comics-Create')

@section('main-content')

    <h1>Form per la Modifica</h1>

    <form method="POST" action="{{route('comics.update', $comics->id)}}">

        @csrf

        @method('PUT')

        <div class="mb-3">
          <label class="form-label">Titolo</label>
          <input value="{{$comics->title}}" name="title" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="description"  class="form-control" id="" cols="30" rows="10">
                {{$comics->description}}
            </textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Carica Foto</label>
            <input value="{{$comics->thumb}}" name="thumb" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input value="{{$comics->price}}" name="price" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input value="{{$comics->series}}" name="series" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Uscita</label>
            <input value="{{$comics->sale_date}}" name="sale_date" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Genere</label>
            <input value="{{$comics->type}}" name="type" type="text" class="form-control">
        </div>


        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
@endsection
