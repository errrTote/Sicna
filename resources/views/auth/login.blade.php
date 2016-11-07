@extends('layouts.main')

@section('content')
 <div class="panel panel-primary panel-ingreso">
    <div class="panel-heading">
        <h4>Iniciar sesion</h4>
    </div>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="panel-body">                            
            <label class="control-label">Usuario</label>
            <input type="text" class='form-control' name="user" placeholder="Usuario" >

            <label class="control-label">Contraseña</label>
            <input type="password" class='form-control' name="password" placeholder="**********">                               
        </div>

        <div class="panel-footer">
            <input type="hidden" name="login" value="1">
            <button type="submit" class="btn btn-primary btn-left">Ingresar<span class="glyphicon glyphicon-log-in"></span></button>                    
        </div>               
    </form>               
 </div>
@endsection

