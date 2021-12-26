@extends('layouts.app')
@section('Titulo') Game @endsection
@section('Nombre') <h3>Nombre: {{$user->nombre}}</h3> @endsection
@section('Ronda') <h3>Ronda: {{$pregunta->categorias_id}}/5</h3> @endsection
@section('Score') <h3 id="puntos" name="puntos">Score: {{$user->puntos}}</h3> @endsection
@section('Salir') <button type="button" class="btn btn-outline-danger"  onclick="salir({{ $user->id }})" > Salir</button> @endsection
@section('Contenido')
<div class="container-fluid d-flex flex-column my-auto">

    <div id="wizard_container">

        <div id="top-wizard">
            <div id="progressbar"></div>
        </div>
        <!-- /top-wizard -->

        <form id="wrapped" method="POST">

            <div id="middle-wizard">
                    <div class="question_title">
                        <h3>{{$pregunta->nombre}}</h3>
                    </div>
                    <div class="row justify-content-center" >
                        @foreach ($pregunta->respuestas as $respuesta )
                        <div class="col-md-12" id="respuestas" name="respuestas">
                            <button type="button" class="btn btn-secondary" id="respuesta{{$respuesta->id}}" name="respuesta{{$respuesta->id}}" onclick="validar({{ $respuesta->id }},{{$user->id}})" > {{$respuesta->nombre}}</button>
                        </div>
                        @endforeach

                    </div>
            </div>


        </form>
    </div>
    <!-- /Wizard container -->
</div>
@endsection
