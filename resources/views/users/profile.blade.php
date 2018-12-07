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
                <div  class="col-sm-12 col-md-6">
                @forelse ( $user->games as $oneGame )
                        <div class="post-container">
                                <div class="post-description">
                                        <img src="../img/icons/pelota.png" class="event-icon-ball">
                                        <div class="description">
                                                <h4><strong>Partido</strong> - {{ $oneGame->title }}</h4>
                                                <h6>En {{ $oneGame->place }} el dia {{ $oneGame->date->format('Y-m-d') }}. Valor: ${{ $oneGame->price }} por persona.</h6>
                                                <br>
                                                <p>{{ $oneGame->description }}</p>
                                        </div>
                                <!--<a href="#" title="Opciones"><i class="fas fa-ellipsis-h"></i></a>-->
                                </div>

                                <div class="second-row-container">
                                        <div class="teams">
                                                <div class="team-1 col-6">
                                                        <h5>Equipo 1:</h5>
                                                        <img src="../img/girl.jpg" class="team-member">
                                                        <img src="../img/girl.jpg" class="team-member">
                                                        <a href="" class="team-member"><i class="fas fa-plus-circle"></i></a>
                                                        <a href="" class="team-member"><i class="fas fa-plus-circle"></i></a>
                                                        <a href="" class="team-member"><i class="fas fa-plus-circle"></i></a>
                                                </div>
                                                <div class="team-2 col-6">
                                                        <h5>Equipo 2:</h5>
                                                        <img src="../img/man.jpg" class="team-member">
                                                        <img src="../img/man.jpg" class="team-member">
                                                        <a href="" class="team-member"><i class="fas fa-plus-circle"></i></a>
                                                        <a href="" class="team-member"><i class="fas fa-plus-circle"></i></a>
                                                        <a href="" class="team-member"><i class="fas fa-plus-circle"></i></a>
                                                </div>
                                        </div>
                                </div>

                                <div class="post-footer">
                                        <div>
                                                <a href="#" title="Like"><i class="fas fa-thumbs-up col-1"></i></a>
                                                <a href="#" title="Comentar"><i class="fas fa-comment-dots col-1"></i></a>
                                        </div>
                                        <div>
                                                <a href="/games/{{ $oneGame->id }}" title="Ver Detalle"><i class="fas fa-arrow-alt-circle-right col-1"></i></a>
                                        </div>
                                </div>
                        </div>
                @empty
                         <p>No hay partidos aun</p>
                @endforelse
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