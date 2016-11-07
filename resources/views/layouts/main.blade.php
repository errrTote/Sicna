<!DOCTYPE html>
<html lang="es">
<head class="maqueta">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" type="img/png"  href="{{ asset('favicon.png') }}">
  <link rel="stylesheet"  href="{{ asset('librerias/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet"  href="{{ asset('librerias/chosen/chosen.css') }}">
	<link rel="stylesheet"  href="{{ asset('/css/main.css') }}">
	<script src="{{ asset('librerias/js/jquery.js') }}" ></script>
  <script src="{{ asset('librerias/bootstrap/js/bootstrap.js') }}" ></script>
	<script src="{{ asset('librerias/chosen/chosen.jquery.js') }}" ></script>

 
	<title>@yield('title', 'Inicio') - Sicna </title>
</head>
<body >
  <script>
        $(document).ready(function(){ 
            document.oncontextmenu = function(){return false;}

            $(".num").keypress(function (key) {           
                if ((key.charCode > 58 || key.charCode < 47)//Numeros               
                    && (key.charCode != 08) //retroceso  
                    )
                    return false;
            });     

            $(".solo_texto").keypress(function (key) {           
                if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
                    && (key.charCode < 65 || key.charCode > 90) //letras minusculas
                    && (key.charCode != 08) //retroceso
                    && (key.charCode != 241) //ñ
                     && (key.charCode != 209) //Ñ               
                     && (key.charCode != 225) //á
                     && (key.charCode != 233) //é
                     && (key.charCode != 237) //í
                     && (key.charCode != 243) //ó
                     && (key.charCode != 250) //ú
                     && (key.charCode != 193) //Á
                     && (key.charCode != 201) //É
                     && (key.charCode != 205) //Í
                     && (key.charCode != 211) //Ó
                     && (key.charCode != 218) //Ú
     
                    )
                    return false;
            });  

            $(".chosen-select").chosen({});   

            var pswd;   
            var pswd_b;   

            $('.pswd').keyup(function() {
                // set password variable
                pswd = $(this).val();
                //validate the length
                if ( pswd.length < 8 ) {
                    $('.length').removeClass('valid').addClass('invalid');
                } else {
                    $('.length').removeClass('invalid').addClass('valid');
                }

                //validate letter
                if ( pswd.match(/[A-z]/) ) {
                    $('.letter').removeClass('invalid').addClass('valid');
                } else {
                    $('.letter').removeClass('valid').addClass('invalid');
                }

                //validate capital letter
                if ( pswd.match(/[A-Z]/) ) {
                    $('.capital').removeClass('invalid').addClass('valid');
                } else {
                    $('.capital').removeClass('valid').addClass('invalid');
                }

                //validate number
                if ( pswd.match(/\d/) ) {
                    $('.number').removeClass('invalid').addClass('valid');
                } else {
                    $('.number').removeClass('valid').addClass('invalid');
                }

           });
                $('.pswd_b').keyup(function(){
                  pswd_b = $(this).val();
                  //validate the length
                  if ( pswd_b == pswd ) {
                      $('.equality').removeClass('invalid').addClass('valid');
                  } else {
                      $('.equality').removeClass('valid').addClass('invalid');
                  }           
                  
                });

            $('.pswd').on('focus',function(){
                $('.pswd_info').removeAttr('hidden','hidden');
            });

            $('.pswd').on('blur',function(){
                $('.pswd_info').attr('hidden','hidden');
             });

            $('.pswd_b').on('focus',function(){
                $('.pswd_info_b').removeAttr('hidden','hidden');
            });

            $('.pswd_b').on('blur',function(){
                $('.pswd_info_b').attr('hidden','hidden');
            });

        });
    </script>
  <header>
    <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">     
          <img src="{{ asset('img/banner.png') }}" class="img-responsive banner">
        </div>
      </div>
    </div>
    @if(Auth::user())
    <nav class="navbar navbar-inverse navbar-fixed">
      <section class="container-fluid">
        <section class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-principal" >
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                
          </button>

          <a href="#" class="navbar-brand"><span class="glyphicon glyphicon-home"></span> </a>
        </section>
          
        <section class="collapse navbar-collapse" id="nav-principal">
          <ul class="nav navbar-nav">
            <li><a href="../paciente/index.php"><span class="glyphicon glyphicon-grain"></span>Paciente</a></li>                
            <li><a href="../empleado/index.php"><span class="glyphicon glyphicon-briefcase"></span> Empleado</a></li>               
            <li><a href="../cita/index.php"><span class="glyphicon glyphicon-book"></span> Cita</a></li>
            <li><a href="{{ route('users.index') }}"><span class="glyphicon glyphicon-user"></span> Usuario</a></li>                
            <li><a href="../reporte/index.php"><span class="glyphicon glyphicon-stats"></span> Reportes</a></li>                
            <li><a href="../log/index.php"><span class="glyphicon glyphicon-list-alt"></span> Historial</a></li>                
          </ul> 
          <ul class="nav navbar-nav navbar-right">
      
            <li><a target="_blank" href="../Manualayuda.pdf"><span class="glyphicon glyphicon-question-sign"></span> </a></li>
            <li class="ingresar">
              <a href="{{ url('/logout') }}">{{ Auth::user()->name }} Salir <span class="glyphicon glyphicon-log-out"></span> </a>
            </li>             
          </ul>                 
        </section>            
      </section>
    </nav>
    @endif
  </header>
  @include('flash::message')

   @if(count($errors)>0)
      <div class="alert alert-danger"> 
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          
          @endforeach
        </ul>
      </div>
    @endif
  <div class="container-fluid maqueta">
    @if(Auth::user())
      <div class="row">
        <div class="col-sm-12  col-md-6 col-sm-offset-1 main">
          @yield('content')        
        </div>
        <div class="col-sm-12 col-md-2 col-md-offset-1 sidebar">
          @yield('sidebar')
        </div> 
      </div> 

    @else
      <div class="row">
        <div class="col-sm-12  col-md-12 main">
          @yield('content')        
       </div>
     </div>
    @endif 
  </div>            

    <footer class="maqueta">
   		<h4 class="Hfooter">			
			 Sistema de Control Natal v.1.0
		  </h4>
     </footer>
</body>
</html>