@extends('layouts.app')

@section('page-title', 'DC-Comics-Show')

@section('main-content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Copertina</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Serie</th>
        <th scope="col">Uscita</th>
        <th scope="col">Genere</th>
      </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{$fumetto->id}}</td>
            <td>
                {{$fumetto->title}}
            </td>
            <td>{{$fumetto->description}}</td>
            <td> <img src="{{$fumetto->thumb}}" alt="img"></td>
            <td>{{$fumetto->price}}</td>
            <td>{{$fumetto->series}}</td>
            <td>{{$fumetto->sale_date}}</td>
            <td>{{$fumetto->type}}</td>
        </tr>

    </tbody>
  </table>
@endsection
