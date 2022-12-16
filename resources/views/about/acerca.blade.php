
@extends('principal.plantilla')

@section('content')

<div class="container-fluid">
<div class="row">
<div class="col-md-12 encabezado">
<h1 class="titulo">ACERCA DE MI</h1>
</div>
</div>
</div>
<br>
<div class="container">
<div class="row justify-content-center">
<div class="col-5 xs-6  col-md-4 col-xl-4 text-center col-auto">
<div class="cfoto">
<img class="cfoto" src="/img/perfil/cperfil.png">
</div>
</div>
<div class="col-12 xs-12  col-md-12 col-xl-4 text-center col-auto ">


</div>
</div>

</div>

<div class="container">
<br>
<div class="col-10 xs-12 col-xl-8 cAbout">
<h1>ACERCA DE MI</h1>
<p id="texto0">Hola, Mi nombre es Luciano soy chileno, tengo 28 años y soy programador JR.</p>
</div>

<div id="contenedor2" class="col-10 col-xs-12 col-xl-8 cAbout">
<h1></h1>
<h1>HABILIDADES</h1>
<p id="texto1">Lenguaje de programacion: JAVA, PHP, JAVASCRIPT.
</p>
    <p id="texto2">
Lenguaje de marcado: HTML,CSS.
</p>
<p id="texto3">
Frameworks: LARAVEL,BOOTSTRAP.
</p>
</div>
<div id="contenedor3" class="col-10 col-xs-12 col-xl-8 cAbout">
<h1></h1>
<h1>EXPERIENCIA</h1>
<p id="texto4">2022: Colegio Juan Sebastian Bach, Soporte TI laboratorio.</p>
<p id="texto5">2022: Practica Profesional, Fundacion Integra Valdivia, Soporte TI.</p>

</div>


<img id="botonSalir" class="BotonFlotante" src="/img/icon/acelerar.png"></img>


</div>


</div>
<br>    
</div>
<br>



<script src="{{asset('javascript/letras.js')}}"></script> 

@endsection