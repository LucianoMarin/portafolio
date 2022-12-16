
@extends('principal.plantilla')

@section('content')

<div class="container-fluid encabezado">
<div class="container">
        <div class="row">
            <div class="col col-xl-12 col-md-8">
                <h1 id="titulo" class="titulo">MI PORTAFOLIO</h1>
</div>
</div>
</div>
</div>  
<br>        

<div class="container">
    
<div class="row">
<div class="col col-xs-12 col-12 col-md-12 col-xl-7">
<div class="">
<div class="container menuBanner">
<div class="row g-0">
<div class="col col-sm-7 col-xl-7">
<div id="fotosc" class="fmenu">
</div>    

</div>
<div class="col col-12 col-xs-12 col-sm-5 col-xl-3">
<ul class="menu">

<a href="acerca">
    <li id="enlace1" class="lmenu">ACERCA</li></a>

    <a href="proyecto">
    <li id="enlace2" class="lmenu">PROYECTOS</li>
    </a>
</ul>

</div>
</div>
</div>

</div>

</div>

            <div id="comentario" class="col col-11 col-xs-11 col-md-4"> 
                <div class="comentario">
               <h2>CONTACTAME: </h2>
               <form action="{{route ('posteo')}}" method="post">      
                @csrf
               <p>Correo Electronico:</p>
               <input name="correo" id="correo"   type="text">
               <p>Nombre:</p>
               <input name="nombre" type="text">

               <p>Mensaje:</p>
               <textarea name="mensaje"></textarea>
        
               <input  class="btn btn-primary" type="submit" value="Enviar">
</div>
        <br>
        <br>
        @if (session('success'))
                                        <h6 class="alert alert-success col-xs-8 col-xxl-8">{{ session('success') }}</h6>
                                               @endif
                                               @if(session('ePk'))
                                               <h6 class="alert alert-danger col-xs-8 col-xxl-8">{{ session('ePk') }}</h6>
                                               @endif
                                               @if ($errors->any())

  
           
        <div class="alert alert-danger col-xs-8 col-xxl-8">
            @foreach ($errors->all() as $error)
            
            <li>{{ $error }}</li>
               
            @endforeach
      
        </div>

        </div>
@endif   
</div>


            </form>
            </div>
  
    

    <br>
    <div class="container-fluid">
    <div class="container">
        <div class="row">
        <div class="col col-md-4">
</div>
        <div class="col col-12 col-md-11 col-md-3">
        <div class="contenedorLenguajes">   
                <img class="imgs" src="img/lenguajes/java.png">
                <img class="imgs" src="img/lenguajes/php.png">
                <img class="imgs" src="img/lenguajes/laravel.png">
                <img class="imgs" src="img/lenguajes/js.png">
                <img class="imgs" src="img/lenguajes/css-3.png">
                <br>
</div>


            </div>
            </div>

        </div>
        <br>
            </div>

    </div>


<!---
<script>
const btnComentario=document.querySelector('#btncomentario');
const comentario=document.querySelector('#comentario');
btnComentario.addEventListener('click',function(){

comentario.innerText="Se envio el mensaje!";


});
</script>
-->
@endsection