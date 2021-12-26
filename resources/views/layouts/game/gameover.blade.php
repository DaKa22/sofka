@extends('layouts.app')
@section('Titulo') Game Over @endsection
@section('Contenido')
<div class="container-fluid d-flex flex-column my-auto">
    <div id="wizard_container">
        <div>
            <div class="question_title">
                <h3>GAME OVER</h3>
            </div>
            <div class="col-md-12">
                <a href="/"> <button  type="submit" id="Inicio " name="Inicio" class="btn btn-outline-secondary" >Inicio </button></a>
            </div>
        </div>

    </div>
</div>
@endsection
