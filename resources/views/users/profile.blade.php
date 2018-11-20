@extends('layouts.base')
@section('title', 'Perfil')
@section('main-content')
<!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
<section class="cont-perfil row">
                <div class="cont-foto col-12">
                        <div class="img-portada" style="background-image: url('img/portada.jpg');">                
                        </div>
                        <img class="photo-profile" src="img/man.jpg" alt="">
                </div>
        </section>
        <section class="row">
                <div class="col-sm-12 col-md-6">
                        <div class="cont-datos">
                                <div class="dato">
                                        <span><strong>Nombre:</strong></span>
                                        <span>Jose Alfaro</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Apodo:</strong></span>
                                        <span>Joseph</span> 
                                </div>           
                                <div class="dato">
                                        <span><strong>Fecha de Nac:</strong></span>
                                        <span>27/05/1992</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Correo:</strong></span>
                                        <span>joseph@gmail.com</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Estado:</strong></span>
                                        <span>Soltero</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Sexo:</strong></span>
                                        <span>Masculino</span>
                                </div>
                        </div>
                        <div class="cont-datos">
                                <div class="dato">
                                        <span><strong>Torneos jugados:</strong></span>
                                        <span>5</span>
                                </div>        
                                <div class="dato">
                                        <span><strong>Pertidos jugados:</strong></span>
                                        <span>30</span>            
                                </div>
                                <div class="dato">
                                        <span><strong>Cantidad de post:</strong></span>
                                        <span>100</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Amigos:</strong></span>
                                        <span>263</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Valoracion:</strong></span>
                                        <span>Excelente</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Deporte:</strong></span>
                                        <span>Futbol</span>
                                </div>
                        </div>
                </div>

                <div class="col-sm-12 col-md-6">
                        <div class="tipodepost-container post-profile">
                                <ul>
                                        <li><a href="#" class="iconos" data-toggle="modal" data-target="#NewPartido"><i class="far fa-futbol"></i>Nuevo Partido</a></li>
                                        <li><a href="#" class="iconos" data-toggle="modal" data-target="#NewFecha"><i class="fas fa-calendar-plus"></i>Nueva Fecha</a></li>
                                        <li><a href="#" class="iconos" data-toggle="modal" data-target="#NewTorneo"><i class="fas fa-trophy"></i>Nuevo Torneo</a></li>
                                </ul>
                        </div>
                        <div class="post-container">
                        <div class="post-description">
                        <img src="img/icons/trofeo.png" class="event-icon-trophy">
                        <div class="description">
                                <h4>Torneo - Club Angel Gallardo</h4>
                                <h6>Jueves 23 de agosto, $130 por persona</h6>
                                <br>
                        </div>
                        <a href="#" title="Opciones"><i class="fas fa-ellipsis-h"></i></a>
                        </div>

                        <div class="second-row-container">
                        <div class="teams">
                                <div class="team-1 col-sm-6  col-md-6  col-lg-6">
                                <h5>Equipo 1:</h5>
                                <img src="img/girl.jpg" class="team-member">
                                <img src="img/girl.jpg" class="team-member">
                                <img src="img/girl.jpg" class="team-member">
                                <img src="img/girl.jpg" class="team-member">
                                <img src="img/girl.jpg" class="team-member">
                                </div>
                                <div class="team-2 col-sm-6  col-md-6  col-lg-6">
                                <h5>Equipo 2:</h5>
                                <img src="img/man.jpg" class="team-member">
                                <img src="img/man.jpg" class="team-member">
                                <img src="img/man.jpg" class="team-member">
                                <img src="img/man.jpg" class="team-member">
                                <img src="img/man.jpg" class="team-member">
                                </div>
                        </div>

                        <div class="join">
                                <a href="#" title="Unirse"><i class="fas fa-plus-circle"></i>UNIRSE</a>

                        </div>
                        </div>
                        <div class="post-footer">
                        <a href="#" title="Like"><i class="fas fa-thumbs-up col-1"></i></a>
                        <a href="#" title="Comentar"><i class="fas fa-comment-dots col-1"></i></a>
                        </div>
                        </div>
                        <div class="post-container">
                        <div class="post-description">
                        <img src="img/icons/pelota.png" class="event-icon-ball">
                        <br>
                        <div class="description">
                                <h4>Partido - Open Gallo</h4>
                                <h6>Jueves 23 de agosto, $80 por persona</h6>
                                <br>
                        </div>
                        <a href="#" title="Opciones"><i class="fas fa-ellipsis-h"></i></a>
                        </div>

                        <div class="second-row-container">
                        <div class="teams">
                                <div class="team-1 col-sm-6  col-md-6  col-lg-6">
                                <h5>Equipo 1:</h5>
                                <img src="img/girl.jpg" class="team-member">
                                <img src="img/girl.jpg" class="team-member">
                                <img src="img/girl.jpg" class="team-member">
                                <img src="img/girl.jpg" class="team-member">
                                <img src="img/girl.jpg" class="team-member">
                                </div>
                                <br>
                                <div class="team-2 col-sm-6  col-md-6  col-lg-6">
                                <h5>Equipo 2:</h5>
                                <img src="img/man.jpg" class="team-member">
                                <img src="img/man.jpg" class="team-member">
                                <img src="img/man.jpg" class="team-member">
                                <img src="img/man.jpg" class="team-member">
                                <img src="img/man.jpg" class="team-member">
                                </div>
                        </div>

                        <div class="join">
                                <a href="#" title="Unirse"><i class="fas fa-plus-circle"></i>UNIRSE</a>

                        </div>
                        </div>
                        <div class="post-footer">
                        <a href="#" title="Like"><i class="fas fa-thumbs-up col-1"></i></a>
                        <a href="#" title="Comentar"><i class="fas fa-comment-dots col-1"></i></a>
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
<!--fin del contenido-->
@endsection