@extends('layouts.app')

@section('page-title', 'DC-Comics-Home')

@section('main-content')
    <h1>Lista Comics</h1>

    <div>
        <a href="{{route('comics.create')}}">Pubblica il tuo Fumetto!</a>
    </div>

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

            @foreach ($comics as $elem)
            <tr>
                <td>{{$elem->id}}</td>
                <td>
                    <a href="{{route('comics.show', $elem->id )}}">
                        {{$elem->title}}
                    </a>
                </td>
                <td>{{$elem->description}}</td>
                <td> <img src="{{$elem->thumb}}" alt="img"></td>
                <td>{{$elem->price}}</td>
                <td>{{$elem->series}}</td>
                <td>{{$elem->sale_date}}</td>
                <td>{{$elem->type}}</td>
            </tr>
            @endforeach

        </tbody>
      </table>

      {{$comics->links()}}

@endsection
