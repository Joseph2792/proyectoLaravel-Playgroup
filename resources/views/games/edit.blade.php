@extends('layouts.base')
@section('title', 'Crear Post')
@section('main-content')
<!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
<div class="contenedor container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Editar Partido: {{ $game->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <div class="cont-form">
        <form class="row"  action="{{ route('games.update', $game) }}" method="post">
        @csrf
        {{ method_field('PUT') }}
            <div class="col-6">
                <div>
                    <label for="">Título:</label><br>
                    <input type="text" name="title" 
                        class="form-control {{ $errors->has('title') ? 'is-invalid': '' }}"
                        value="{{ old('title', $game->title) }}">
                </div>
                
                <div>
                    <label for="">Lugar:</label><br>
                    <input type="text" name="place"  
                        class="form-control {{ $errors->has('place') ? 'is-invalid': '' }}"
                        value="{{ old('place', $game->place) }}">
                </div>
                <div>
                    <label for="">Costo:</label><br>
                    <input type="number" name="price" 
                        class="form-control {{ $errors->has('price') ? 'is-invalid': '' }}"
                        value="{{ old('price', $game->price) }}">
                </div>
                <div>
                    <label for="">Descripción:</label><br>
                    <input type="text" name="description" 
                        class="form-control {{ $errors->has('description') ? 'is-invalid': '' }}"
                        value="{{ old('description', $game->description) }}">
                </div>
                <div >
                    <label for="">Jugadores por equipo:</label><br>
                    <input type="number" name="number_of_players" 
                        class="form-control {{ $errors->has('number_of_players') ? 'is-invalid': '' }}"
                        value="{{ old('number_of_players', $game->number_of_players) }}">
                </div>
                
                <div>
                    <label for="">Fecha:</label><br>
                    <input type="date" name="date" 
                        class="form-control {{ $errors->has('date') ? 'is-invalid': '' }}"
                        value="{{ $game->date->format('y-m-d') }}">
                </div>
                <br>
                <input class="btn btn-primary" type="submit" value="Guardar cambios">
            </div>
        </form>
        @auth
            <form action="{{ route('games.destroy', $game->id) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <br>
                <button type="submit" class="btn-danger">Borrar partido</button>
            </form>
        @endauth
    </div>
   
</div>
<!--fin del contenido-->
@endsection
