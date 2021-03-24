
@extends('categoria.layout')
   
   @section('content')
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2>Editar producto</h2>
               </div>
               <div class="pull-right">
                   <a class="btn btn-primary" href="{{ route('categoria.index') }}"> Back</a>
               </div>
           </div>
       </div>
       @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Lo sentimos</strong> Ha ocurrido un error<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('categoria.update',$categoria->IdCategoria) }}" method="POST">
    @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="Nombre" value="{{ $categoria->Nombre }}" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Estado:</strong>
                
                    <select class="form-control" style="height:50px" name="Estado" >
                        @if($categoria->Estado==1)
                            <option value="{{$categoria->Estado}}" selected>Activo</option>
                            <option value="0">Inactivo</option>
                        @else
                            <option value="1">Activo</option>
                            <option value="{{$categoria->Estado}}" selected>Inactivo</option>
                        @endif
                    
                    
                </select>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
    @endsection

