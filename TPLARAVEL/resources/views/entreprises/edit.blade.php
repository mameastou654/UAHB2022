@extends('entreprises.layout')
@section('content')
 <h1>Modifier Entreprise</h1>
 @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ url('entreprise/'. $entreprise->id) }}" >
 @method('PATCH')
 @csrf
 <div class="form-group mb-3">
 <label for="nom">Nom:</label>
 <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom" value="{{ $entreprise->nom }}">
 </div>

 <div class="form-group mb-3">
 <label for="telephone">Description:</label>
 <input type="text" class="form-control" id="description" placeholder="Entrer Description" name="description" value="{{ $entreprise->description }}">
 </div>
 
 <button type="submit" class="btn btn-primary">Enregistrer</button>
 </form>
@endsection