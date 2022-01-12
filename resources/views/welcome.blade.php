@extends('layouts.app')
@section('Titulo') Inicio @endsection
@section('Contenido')
<div class="container-fluid d-flex flex-column my-auto">
    <div id="wizard_container">
        <div>
            <table class="table table-bordered table-striped  col-md-12">
                <div class="question_title">
                    <h3>PODIO ACTUAL</h3>
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
            <form method="POST" action="{{ route('Crear_User')}}">
                @csrf
                <div class="question_title">
                    <h3>Ingresa tu nombre</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <input type="text" name="nombre" id="nombre" class=" form-control" required>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" id="registrar" name="Registrar" class="btn btn-outline-success ">Registrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
