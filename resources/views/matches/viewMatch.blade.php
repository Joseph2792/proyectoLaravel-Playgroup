@extends('layouts.base')
@section('title', 'Partido')
@section('main-content')
<!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
<div class="contenedor container-fluid">
    <div class="row">
        <h1>Vista de Partido</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <div>
                <label for="">Titulo</label>
                <span></span>
            </div>
            <div>
                <label for="">Lugar</label>
                <span></span>
            </div>
            <div>
                <label for="">costo</label>
                <span></span>
            </div>
            <div >
                <label for="">Total de jugadores</label>
                <span></span>
            </div>
            <div>
                <label for="">Descripcion</label>
                <span></span>
            </div>
            <div>
                <label for="">Fecha</label>
                <span></span>
            </div>
        </div> 
        <div class="col-12">
            <br>
            <a href="">Volver Atras</a>
        </div> 
    </div>
</div>
<!--fin del contenido-->
@endsection