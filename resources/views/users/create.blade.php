@extends('layouts.main')

@section('title' , 'Crear usuario')

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
        <a class="list-group-item" href="registrar.php" >
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


  
	{!! Form::open(['route'=>'users.store', 'method' => 'POST', 'files' => true]) !!}


        <h3>Registrar Usuario</h3>
        <h5>Todos los campos son obligatorios</h5>  

        <div class="pswd_info" hidden>
            <h5>La contraseña debe contar con:</h5>
            <ul>
                <li class="letter">Al menos <strong>una letra</strong></li>
                <li class="capital">Al menos <strong>una letra en mayúsculas</strong></li>
                <li class="number">Al menos <strong>un número</strong></li>
                <li class="length"><strong>8 carácteres</strong> como mínimo</li>
            </ul>
        </div>

        <div class="pswd_info_b" hidden>
            <h5>La contraseña debe contar con:</h5>
            <ul>
                <li class="equality"><strong>Similitud</strong> con la contraseña anterior</li>                         
            </ul>
        </div> 

      

            <div class="form-group col-md-4 col-sm-5">
                <label for="nombre" class="control-label col-md-12 col-sm-12">Nombre</label>
                <input type="text" class="form-control solo_texto" name="name" value="{{ old('name') }}">                
            </div>

            <div class="form-group col-md-4 col-md-offset-1 col-sm-5">                
                <label for="usuario" class="control-label col-md-12 col-sm-12">Usuario</label>
                   
                <input type="text" class="form-control" name="user" value="{{ old('user') }}">
            </div>   

            <div class="form-group col-md-4 col-sm-5">
                <label for="password" class="control-label col-md-12 col-sm-12">Contraseña</label>                 
                <input type="password" class="form-control pswd" name="password">      
            </div> 

            <div class="form-group col-md-4 col-md-offset-1 col-sm-5">
                <label for="password_b"  class="control-label col-md-12 col-sm-12" >Repita la contraseña</label>
                <input type="password" class="form-control pswd_b" name="password_b" >
            </div>

            <div class="form-group col-md-4 col-sm-5">
                 <label for="tipo" class="control-label col-md-12 col-sm-12">Tipo</label>                     
                  
                <select name="type" class="form-control chosen-select">                                  
                    <option value="1">Asistente</option>
                    <option value="2">Administrador</option>                    
                </select>
            </div>

            <div class="form-group col-md-4 col-md-offset-1 col-sm-5">
                <label for="activo" class="control-label col-md-12 col-sm-12">Habilitado</label>                                
                  
                Si <input type="radio" class="" value="1" name="activo" checked >
                No <input type="radio" class="" value="2" name="activo" >
            </div>

            <div class="form-group col-md-12 col-sm-12">
                <label for="imagen">Foto de perfil</label>
                <input type="file" name="img" id="">
                
            </div>             

            <div class="form-group col-md-12 col-sm-12">                
                <button type='submit' class='btn btn-primary btn-right  col-md-offset-5'>
                    Guardar <span class='glyphicon glyphicon-floppy-saved' aria-hidden='true'></span>
                </button>
            </div>                      
             
    {!! Form::close() !!}
@endsection
