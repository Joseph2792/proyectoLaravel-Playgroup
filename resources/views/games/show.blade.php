@extends('layouts.base')
@section('title', 'Partido')
@section('main-content')
<!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
<div class="contenedor container-fluid">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('home') }}"><i class="fas fa-arrow-circle-left"></i> Volver Atras</a><br>
            <h1>Detalle del Partido</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>
                <label for=""><strong>Titulo:</strong></label>
                <span>{{ $game->title }}</span>
            </div>
            <div>
                <label for=""><strong>Lugar:</strong></label>
                <span>{{ $game->place }}</span>
            </div>
            <div>
                <label for=""><strong>Costo:</strong></label>
                <span>{{ $game->price }}</span>
            </div>
            <div >
                <label for=""><strong>Total de jugadores:</strong></label>
                <span>{{ $game->number_of_players }}</span>
            </div>
            <div>
                <label for=""><strong>Descripción:</strong></label>
                <span>{{ $game->description }}</span>
            </div>
            <div>
                <label for=""><strong>Fecha:</strong></label>
                <span>{{ $game->date }}</span>
            </div>
        </div>
        <div class="col-12">
            <br>

            @auth
                <a href="/games/{{ $game->id }}/edit" class="btn">Editar Partido</a>
                
                <form action="{{ route('games.destroy', $game->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <br>
                    <button type="submit" class="btn-danger">Borrar partido</button>
                </form>
            @endauth

        </div>
    </div>
</div>
<!--fin del contenido-->
@endsection
