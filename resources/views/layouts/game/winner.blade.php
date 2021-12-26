@extends('layouts.app')
@section('Titulo') Winner @endsection
@section('Contenido')
<div class="container-fluid d-flex flex-column my-auto">
    <div id="wizard_container">
        <div>
            <div class="question_title">
                <h3>RETO FINALIZADO</h3>
                <p> ¡Felicitaciones!</p>
            </div>
            <table class="table table-bordered table-striped  col-md-12">
                <div class="question_title">
                    <h3>PODIO</h3>
                </div>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $user->nombre }}</td>
                        <td>{{ $user->puntos }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-md-12">
                <a href="/"> <button  type="submit" id="Inicio" name="Inicio" class="btn btn-outline-secondary" >Inicio </button></a>
            </div>
        </div>

    </div>
</div>
@endsection
