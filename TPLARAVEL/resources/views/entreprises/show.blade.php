@extends('entreprises.layout')
@section('content')
 <h1>Gestion Contacte</h1>
 <table class="table table-bordered">
 <tr>
 <th>Nom Complet:</th>
 <td>{{ $entreprise->nom}}</td>
 </tr>
 <tr>
 <th>Description:</th>
 <td>{{ $entreprise->description }}</td>
 </tr>
 <tr>
 
 </table>
@endsection