@extends('layouts.main')

@section('title' , 'Modificar usuario')

@section('sidebar')
  <ul class="nav nav-pills nav-stacked">
    <li class="list-group-item list-group-item-success">
        <h4>Usuarios</h4>
    </li>
    <li>
        <a class="list-group-item " href="{{ route('users.index') }}" >
            <div>                           
                Listar <span class='glyphicon glyphicon-th-list'></span>            
            </div>
        </a>
    </li>
    <li>
        <a class="list-group-item" href="{{ route('users.create') }}" >
            <div>                           
                Registrar <span class='glyphicon glyphicon-option-vertical' ></span>            
            </div>                      
        </a>
    </li>
    <li>
        <a class="list-group-item" href="administrar.php" >
            <div>                           
                Administrar <span class='glyphicon glyphicon-wrench'></span>           
            </div>                      
        </a>
    </li>    
</ul>
@endsection

@section('content')
  
	{!! Form::open(['route'=>['users.update', $user], 'method'=>'PUT']) !!}

    
        <div class="container-fluid">
            <h3>Modificar usuario</h3>
            <h5> <span class="nota">*</span> Debe introducir la constraseña para guardar los cambios</h5>  
        </div>       

        <div class="container-fluid">
            <div class="form-group col-md-4 col-sm-4 ">
                <label for="nombre" class="control-label col-md-12 col-sm-12">Nombre</label>
                <input type="text" class="form-control solo_texto" name="name" value="{{$user->name}}">                
            </div>

            <div class="form-group col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1">                
                <label for="usuario" class="control-label col-md-12 col-sm-12">Usuario</label>                   
                <input type="text" class="form-control" name="user" value="{{$user->user}}">
            </div>         
        </div>

        <div class="container-fluid">
            <div class="form-group col-md-4 col-sm-4">
                 <label for="tipo" class="control-label col-md-12 col-sm-12">Tipo</label>                     
                  
                <select name="type"  class="form-control">                                  
                    <option value="{{$user->type}}">{{ $user->type }}</option>
                    <option value="0">----------------------</option>
                    <option value="1">Asistente</option>
                    <option value="2">Administrador</option>
                </select>
            </div>

            <div class="form-group col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1">
                <label for="activo" class="control-label col-md-12 col-sm-12">Habilitado</label> 
                @if($user->activo=='Habilitado')   
                    Si <input type="radio" class="" value="1" name="activo" checked>
                    No <input type="radio" class="" value="2" name="activo">
                @else
                    Si <input type="radio" class="" value="1" name="activo">
                    No <input type="radio" class="" value="2" name="activo" checked>
                @endif
            </div>
        </div>

        <div class="container-fluid">
            <div class="form-group col-md-4 col-sm-4">               
                <label for="password" class="control-label col-md-12 col-sm-12">Contraseña administrador <span class="nota">*</span></label>                 
                <input type="password" class="form-control" name="passwordAdmin">      
            </div>
        </div>

        <div class="container-fluid">
            <div class="form-group col-md-12 col-sm-12">               
                <button type='submit' class='btn btn-primary btn-right  col-md-offset-5'>
                    Guardar <span class='glyphicon glyphicon-floppy-saved' aria-hidden='true'></span>
                </button>
            </div>                      
        </div>
             
    {!! Form::close() !!}
@endsection
