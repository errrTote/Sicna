@extends('layouts.main')

@section('content')
 @if(Auth::user()) 	
	<img src="{{ asset('img/sazul.png') }}" class="img-responsive logo">	
@else	
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
 @endif
@endsection

@section('sidebar')
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Informacion!</h3>
  </div>
  <div class="panel-body">    
    <p>
		<h4>Sicna: <small>Sistema de control natal</small></h4>
		<small>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit voluptas deserunt atque vel iusto soluta officia hic quasi praesentium cum, perferendis consequuntur tempora neque sunt quam! Perspiciatis nihil voluptatem et!
		</small>
	</p>
  </div>
</div>
@endsection
