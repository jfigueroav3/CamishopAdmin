@extends('layouts.app', ['activePage' => 'proveedor', 'titlePage' => __('Editar Proveedor')])
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar proveedor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('proveedor.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{route('proveedor.update',$proveedor->IdProveedor) }}" method="POST">
    @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="Nombre" value="{{ $proveedor->Nombre }}" class="form-control" placeholder="Nombre">
                    <strong>Contacto:</strong>
                    <input type="text" name="Contacto" value="{{ $proveedor->Contacto }}" class="form-control" placeholder="Nombre de persona de contacto">
                    <strong>Telefono:</strong>
                    <input type="text" name="TelefonoContacto" value="{{ $proveedor->TelefonoContacto }}" class="form-control" placeholder="38984223">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection