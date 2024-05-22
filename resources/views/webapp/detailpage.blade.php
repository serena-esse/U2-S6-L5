<?php 

?>
@extends('webapp.templates.allpagestemplate')
@section('title', $progetto->nome)

@section('content')


  
<div class="container mt-5">
 <div class="row">

<div class="col-md-4"> <h2 class="text-center">Riepilogo</h2>
<div class="card mx-auto" style="width: 18rem;">

  <img src="<?php 
    if ($progetto->linguaggioSviluppo == "Laravel") { 
        echo "/assets/laravel.png"; 
    } else if ($progetto->linguaggioSviluppo == "PHP") {
        echo "/assets/php.png"; 
    } else if ($progetto->linguaggioSviluppo == "React") {
        echo "/assets/react.png"; 
    } else if ($progetto->linguaggioSviluppo == "Javascript") {
        echo "/assets/js.png"; 
    } 
?>"class="card-img-top p-5" alt="...">
  <div class="card-body">
    <h5 class="card-title ">{{$progetto->nome}}</h5>
   
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Nome :</b> {{$progetto->nome}}</li>
    <li class="list-group-item"><b>Descrizione :</b> {{$progetto->descrizione}}</li>
    <li class="list-group-item"><b>Tipologia :</b> {{$progetto->tipologia}}</li>
    <li class="list-group-item"><b> Linguaggio sviluppo :</b> {{$progetto->linguaggioSviluppo}}</li>
    <li class="list-group-item"><b> Stato :</b>{{$progetto->stato}}</li>
  </ul>

</div>
</div>
<div class="col-md-8">
<h2 class="text-center">Attivita</h2>
@if( count($progetto -> attivita) > 0)
        

        <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Stato</th>
        
        
        <th>Data di Inizio</th>
        <th>Ultima Modifica</th>
       
        <th></th>
       
      </tr>
    </thead>
    <tbody>
    @foreach($progetto -> attivita as $key => $value)
    <tr>
        <td>{{$value->nomeAttivita}}</td>
        <td>{{$value->descrizioneAttivita}}</td>
        <td>{{$value->statoAttivita}}</td>
        
        <td>{{$value->created_at}}</td>
        <td>{{$value->updated_at}}</td>
        <td>
    <form method="post" action="/attivita/{{$value->id}}">
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

  <a href="/attivita/create?id={{$progetto->id}}/" class="btn btn-info w-100 text-white"> inserisci nuova attivita'</a>
</div>
 </div>





</div>
 

@endsection
</ul>