@extends('entreprises.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Gestion des entreprises</h2>
            </div>
            <div class="float-end mb-2" style="margin-right: -30px">
                <a class="btn btn-success" href="{{ route('entreprises.create') }}"> Ajouter une nouvelle entreprise</a>
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
            <th>id</th>
            <th>Nom</th>
            <th>description</th>
           
        </tr>
        @foreach ($entreprises as $entreprise)
        <tr>
            <td>{{ $entreprise->id_Entreprise }}</td>
            <td>{{ $entreprise->nom_Entreprise }}</td>
            <td>{{ $entreprise->description_Entreprise }}</td>
          

            <td>
                <form action="{{ route('entreprises.destroy',$entreprise->id_Entreprise) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('entreprises.show',$entreprise->id_Entreprise) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('entreprises.edit',$entreprise->id_Entreprise) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center pagination-md">
        {!! $entreprises->links('pagination::bootstrap-4') !!}
    </div> 
@endsection