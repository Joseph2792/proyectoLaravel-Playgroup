@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>


            </div>
        </div>
    </div>


<section class="row posts">

</section>
<section class="row ">

</section>
<!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
      <div class="col-sm-12  col-md-8  col-lg-6">
    <div class="tipodepost-container">
      <ul>
        <li><a href="#" class="iconos" data-toggle="modal" data-target="#NewPartido"><i class="far fa-futbol"></i>Nuevo Partido</a></li>
        <li><a href="#" class="iconos" data-toggle="modal" data-target="#NewFecha"><i class="fas fa-calendar-plus"></i>Nueva Fecha</a></li>
        <li><a href="#" class="iconos" data-toggle="modal" data-target="#NewTorneo"><i class="fas fa-trophy"></i>Nuevo Torneo</a></li>
      </ul>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="NewPartido" tabindex="-1" role="dialog" aria-labelledby="NewPartidoTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NewPartidoTitle">Nuevo Partido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Crear</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="NewFecha" tabindex="-1" role="dialog" aria-labelledby="NewFechaTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NewFechaTitle">Nueva Fecha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Crear</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="NewTorneo" tabindex="-1" role="dialog" aria-labelledby="NewTorneoTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NewTorneoTitle">Nuevo Torneo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Crear</button>
      </div>
    </div>
  </div>
</div>

<!-- posteos -->
  <div class="col-12 col-sm-12 col-md-8 col-lg-6">
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

</div>
<div class="col-12 col-sm-12 col-md-8 col-lg-6">
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
      <div class="col-12 col-sm-12 col-md-8 col-lg-6">
          <div class="post-container">
            <div class="post-description">
              <img src="img/icons/trofeo.png" class="event-icon-trophy">
              <br>
              <div class="description">
                <h4>Torneo - Campus</h4>
                <h6>Jueves 30 de agosto, $100 por persona</h6>
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
</div>     

<!-- mensajes -->
<div class="msn">
  <a href="#" title="Chat (0)" data-toggle="popover" data-placement="left" data-content="No hay mensajes por leer">
    <i class="fas fa-envelope"></i>
    <span class="numb"></span>
  </a>
</div>
</div>
@endsection
