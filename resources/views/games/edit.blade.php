@extends('layouts.base')
@section('title', 'Crear Post')
@section('main-content')
<!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
<div class="contenedor container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Nuevo Partido</h1>
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
        <form class="row"  action="{{ route('games.store') }}" method="post">
        @csrf
            <div class="col-6">
                <div>
                    <label for="">Título:</label><br>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>
                
                <div>
                    <label for="">Lugar:</label><br>
                    <input type="text" name="place" class="form-control" value="{{ old('place') }}">
                </div>
                <div>
                    <label for="">Costo:</label><br>
                    <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                </div>
                <div>
                    <label for="">Descripción:</label><br>
                    <input type="text" name="description" class="form-control" value="{{ old('description') }}">
                </div>
                <div >
                    <label for="">Jugadores por equipo:</label><br>
                    <input type="number" name="number_of_players" class="form-control" value="{{ old('number_of_players') }}">
                </div>
                
                <div>
                    <label for="">Fecha:</label><br>
                    <input type="date" name="date" class="form-control" value="{{ old('date') }}">
                </div>
                <br>
                <input class="btn btn-danger" type="submit" value="Eliminar Partido">
                
                <input class="btn btn-primary" type="submit" value="Crear Partido">
            </div>
        </form>
    </div>
   
</div>
<!--fin del contenido-->
@endsection
