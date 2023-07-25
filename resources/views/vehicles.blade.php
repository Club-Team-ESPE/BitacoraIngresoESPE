@extends('adminlte::page')

@section('title', 'MOVIMIENTO VEHICULAR')

@section('content_header')
    <div class="row justify-content-center align-item-center">
        <div class="col text-center">
        <h1>MOVIMIENTO VEHICULAR</h1>
        </div>
    </div>
    
@stop

@section('content')
    <div class="row">
        <div class="col ">
            AQUÍ VA LA TABLA DE MOVIMIENTO VEHICULAR
        </div>
    </div>

    <div class="row">
        <div class="col ">
            AQUÍ VA LA TABLA DE VEHÍCULOS FUERA DE LA UNIVERSIDAD
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
