@extends('layouts.base')
@section('title', 'Home')
@section('main-content')
  <div class="contenedor container-fluid">
    <section class="row home">
      <!-- posteos -->
      <div class="col-12 col-sm-12 col-md-8 col-lg-4">

          <div class="photo-profile-home">
            <a class="cont-photo-profile" href="">
                <img class="photo" src="img/man.jpg" alt="">
            </a>
            <span class="name-home">{{ Auth::user()->name }} </span>
          </div>
          <div class="cont-info">
            <div class="dato">
                <span><strong>Torneos jugados</strong></span>
                <span>20</span>
            </div>
            <div class="dato">
                <span><strong>Partidos jugados</strong></span>
                <span>80</span>
            </div>
          </div>
          <div class="cont-info">
            <span><strong>Jugadores sugeridos</strong></span>
            <div class="dato">
                <ul>
                  <li><a href="#">Ricardo Diaz</a></li>
                  <li><a href="#">Christian Garcia</a></li>
                  <li><a href="">Leandro Vallejos</a></li>
                </ul>
            </div>
          </div>

      </div>
      <div class="col-12 col-sm-12 col-md-8 col-lg-8">
        <div class="tipodepost-container posts-home">
          <ul>
            <li><a href="/games/create" class="iconos"><i class="far fa-futbol"></i>Nuevo Partido</a></li>
            <li><a href="" class="iconos"><i class="fas fa-calendar-plus"></i>Nueva Fecha</a></li>
            <li><a href="" class="iconos"><i class="fas fa-trophy"></i>Nuevo Torneo</a></li>
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
    <!-- mensajes -->
    <div class="msn">
      <a href="#" title="Chat (0)" data-toggle="popover" data-placement="left" data-content="No hay mensajes por leer">
        <i class="fas fa-envelope"></i>
        <span class="numb"></span>
      </a>
    </div>
  </div>
@endsection
