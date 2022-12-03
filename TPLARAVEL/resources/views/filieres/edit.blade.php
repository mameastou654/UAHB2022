@extends('filieres.layout')
@section('content')
 <h1>Modifier Filiere</h1>
 @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ url('filiere/'. $filiere->id) }}" >
 @method('PATCH')
 @csrf
 <div class="form-group mb-3">
 <label for="nom">Nom:</label>
 <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom" value="{{ $filiere->nom }}">
 </div>

 
 <button type="submit" class="btn btn-primary">Enregistrer</button>
 </form>
@endsection