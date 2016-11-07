@extends('layouts.main')

@section('title' , 'Lista de usuarios')

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
     <li>
        {!! Form::open(['route' => 'users.index', 'method' => 'GET']) !!}
            <div class="input-group">
                <input type="text" name="name" class="form-control" placeholder="Buscar...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
            </div><!-- /input-group -->
        {!! Form::close() !!}
    </li>    
</ul>
@endsection

@section('content')
  
    <h3>Lista de Usuarios</h3>
 <div class="table-responsive">
     
    <table class="table table-striped ">
        <thead>                  
            <th>Id</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Tipo</th>
            <th>Activo</th>
            <th>Acciones</th> 
        </thead>

        <tbody>
             @foreach($users as $user)
            <tr>
                <td> {{$user->id }} </td>
                <td> {{$user->name }} </td>
                <td> {{$user->user }} </td>
                <td> {{$user->type }} </td>
                <td> {{$user->activo }} </td>
                <td>
                    <a href=" {{ route('users.show', $user->id) }} ">
                        <button type='button' class='btn btn-primary btn-sm'>
                            <span class='glyphicon glyphicon-search' aria-hidden='true'></span> 
                        </button>
                    </a> 
                    <a href=" {{ route('users.edit', $user->id) }} ">
                        <button type='button' class='btn btn-primary btn-sm'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> 
                        </button>
                    </a> 
                 </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
 </div>
 {!! $users->render() !!}
@endsection

