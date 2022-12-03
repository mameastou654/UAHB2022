@extends('filieres.layout')
@section('content')
 <h1>Gestion Filiere</h1>
 <table class="table table-bordered">
 <tr>
 <th>Nom Complet:</th>
 <td>{{ $filiere->nom}}</td>
 </tr>
 <tr>
 <th>Description:</th>
 <td>{{ $filiere->description }}</td>
 </tr>
 <tr>
 
 </table>
@endsection