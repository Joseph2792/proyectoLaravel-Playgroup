@extends('layouts.base')
@section('title', 'Perfil')
@section('main-content')
<!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
<div class="contenedor container-fluid">
        <section class="cont-perfil row">
                <div class="cont-foto col-12">
                        <div class="img-portada" style="background-image: url('../img/portada.jpg');"></div>
                        <img class="photo-profile" src="/storage/{{ Auth::user()->avatar }}" alt="">
                </div>
        </section>

        <section class="row">
                <div class="col-sm-12 col-md-6">
                        <div class="cont-datos">
                                <div class="dato">
                                        <span><strong>Nombre:</strong></span>
                                        <span>{{ $user->name }}</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Apodo:</strong> </span>
                                        <span>{{ $user->nickname }}</span> 
                                </div>           
                                <div class="dato">
                                        <span><strong>Fecha de Nac:</strong></span>
                                        <span>null</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Correo:</strong></span>
                                        <span>{{ $user->email }}</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Estado:</strong></span>
                                        <span>null</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Sexo:</strong></span>
                                        <span>null</span>
                                </div>
                        </div>
                        <div class="cont-datos">
                                <div class="dato">
                                        <span><strong>Torneos jugados:</strong></span>
                                        <span>null</span>
                                </div>        
                                <div class="dato">
                                        <span><strong>Pertidos jugados:</strong></span>
                                        <span>null</span>            
                                </div>
                                <div class="dato">
                                        <span><strong>Cantidad de post:</strong></span>
                                        <span>null</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Amigos:</strong></span>
                                        <span>null</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Valoracion:</strong></span>
                                        <span>null</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Deporte:</strong></span>
                                        <span>null</span>
                                </div>
                                </div>
                        </div>
                </div>
        </section>
<!--fin del contenido-->
        <div class="msn">
                <a href="#" title="Chat (0)" data-toggle="popover" data-placement="left" data-content="No hay mensajes por leer">
                        <i class="fas fa-envelope"></i>
                        <span class="numb"></span>
                </a>
        </div>

</div>
<!--fin del contenido-->
@endsection