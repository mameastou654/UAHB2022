@extends('entreprises.layout')
@section('content')
 <h1>Ajouter une entreprise</h1>
 @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form action="{{ url('entreprise') }}" method="POST">
 @csrf
 <div class="form-group mb-3">
 <label for="nomComplet">Nom :</label>
 <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
 </div>
 <div class="form-group mb-3">
 <label for="telephone">Description:</label>
 <input type="text" class="form-control" id="descriptio" placeholder="telephone" name="telephone">
 </div>
 
 <button type="submit" class="btn btn-primary">Enregister</button>
 </form>
@endsection
