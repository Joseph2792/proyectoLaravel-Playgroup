@extends('layouts.base')
@section('title', 'Editar Partido')
@section('main-content')
<!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
<div class="contenedor container-fluid">
    <div class="row">
        <h1>Editar Partido</h1>
        <div class="cont-form">
            <form action="">
            <div class="col-sm-12 col-md-6">
                    <div>
                        <label for="">Titulo</label><br>
                        <input type="text" name="name" id="">
                    </div>
                    <div>
                        <label for="">Lugar</label><br>
                        <input type="text" name="place" id="">
                    </div>
                    <div>
                        <label for="">costo</label><br>
                        <input type="number" name="price" id="">
                    </div>
                    <div >
                        <label for="">Total de jugadores</label><br>
                        <input type="number" name="number_of_players" id="">
                    </div>
                    <div>
                        <label for="">Descripcion</label><br>
                        <input type="text" name="description" id="">
                    </div>
                    <div>
                        <label for="">Fecha</label><br>
                        <input type="date" name="date" id="">
                    </div>
                </div>

                <div class="col-12">
                    <br>
                    <input class="btn btn-danger" type="button" value="Eliminar Partido">
                    <br>
                    <input class="btn btn-primary" type="button" value="Guardar Partido">
                </div>
            </form>
        </div>
    </div>
</div>
<!--fin del contenido-->
@endsection
