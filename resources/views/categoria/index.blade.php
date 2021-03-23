@extends('categoria.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Categorías</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categoria.create') }}"> Nueva categoría</a>
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
            <th>Id categoria</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->Nombre }}</td>
            <td>{{$value->Estado}}</td>
           <!-- <td>{{ \Str::limit($value->description, 100) }}</td>-->
            <td>
                <form action="{{ route('categoria.destroy',$value->IdCategoria) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('categoria.show',$value->IdCategoria) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('categoria.edit',$value->IdCategoria) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection