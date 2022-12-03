@extends('filieres.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Gestion des filieres</h2>
            </div>
            <div class="float-end mb-2" style="margin-right: -30px">
                <a class="btn btn-success" href="{{ route('filieres.create') }}"> Ajouter une nouvelle filiere</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Codef</th>
            <th>Nom</th>
           
        </tr>
        @foreach ($filieres as $filiere)
        <tr>
            <td>{{ $filiere->codef_Filiere }}</td>
            <td>{{ $filiere->nom_Filiere }}</td>
            

            <td>
                <form action="{{ route('filieres.destroy',$filiere->id_Filiere) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('filieres.show',$filiere->codef_filieres) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('filieres.edit',$filiere->codef_filieres) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center pagination-md">
        {!! $filieres->links('pagination::bootstrap-4') !!}
    </div> 
@endsection