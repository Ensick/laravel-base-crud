@extends('layouts.app')

@section('page-title', 'DC-Comics-Home')

@section('main-content')
    <h1>Lista Comics</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
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
            <th scope="col">Elimina</th>
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
                <td>
                    <form action="{{route('comics.destroy',$elem->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-dark" type="submit">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </form>
                    <div>
                        <a href="{{route('comics.edit', $elem->id)}}">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
      </table>

      {{$comics->links()}}

@endsection
