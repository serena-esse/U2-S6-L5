@extends('webapp.templates.allpagestemplate')
@section('title', 'Tutti i progetti')

@section('content')

<ul>
@if($progetto)
        @foreach($progetto as $key => $value)
        <li class="list-group-item">
             <h1>{{$value->progetto}}</h1>
             
        </li>
        @endforeach
        @endif

        @if( count($progetto) > 0)
        

        <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Tipologia</th>
        <th>Linguaggio di Sviluppo</th>
        <th>Stato</th>
        <th>User ID</th>
        <th>Data di Inizio</th>
        <th>Ultima Modifica</th>
       
      </tr>
    </thead>
    <tbody>
    @foreach($progetto as $key => $value)
    <tr>
        <td>{{$value->nome}}</td>
        <td>{{$value->descrizione}}</td>
        <td>{{$value->tipologia}}</td>
        <td>{{$value->linguaggioSviluppo}}</td>
        <td>{{$value->stato}}</td>
        <td>{{$value->user_id}}</td>
        <td>{{$value->created_at}}</td>
        <td>{{$value->updated_at}}</td>
        <td><a href="/progetti/{{$value->id}}/" class="btn btn-info text-white">dettaglio</a></td>
        <td>
        
       
        <form method="post" action="/progetti/{{$value->id}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">
                                                        Elimina
                                                    </button>
                                                </form>
      
      </td>
      </tr>
        @endforeach
      
    </tbody>
  </table>

  @else
  <h2>Non ci sono progetti</h1>
  @endif

@endsection
</ul>