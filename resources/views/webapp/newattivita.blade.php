@extends('webapp.templates.allpagestemplate')
@section('title', 'Crea nuovo Progetto')

@section('content')


<?php $userID = Auth::user()->id;?>
<form action="/progetti" method="POST">
    @csrf 
    
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
        <input type="text" class="form-control" id="userID" name="user_Id" required value="{{$userID}}" hidden>
       
    </div>
    
    <div class="mb-3">
        <label for="descrizione" class="form-label">Descrizione</label>
        <textarea class="form-control" id="descrizione" name="descrizione" rows="3" required></textarea>
    </div>
    
 
    
    
    
    <div class="mb-3">
        <label for="stato" class="form-label">Stato</label>
        <select class="form-select" id="stato" name="stato" required>
            <option value="" selected>Scegli...</option>
            <option value="In Corso">In Corso</option>
            <option value="Completato">Completato</option>
            <option value="Sospeso">Sospeso</option>
            <!-- Altri stati qui -->
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Invia</button>
</form>

@endsection