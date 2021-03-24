@extends('producto.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tipo de Monedas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('moneda.create') }}"> Create New Post</a>
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
            <th>No</th>
            <th>Name</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($monedas as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ \Str::limit($value->Descripcion, 100) }}</td>
            <td>{{ \Str::limit($value->Estado, 1) }}</td>
            <td>
                <form action="{{ route('moneda.destroy',$value->IdMoneda) }}" method="POST">    
                    <a class="btn btn-primary" href="{{ route('moneda.edit',$value->IdMoneda) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $monedas->links() !!}      
@endsection