@extends('adminlte::page')

@section('title', 'CONSIGNAS')

@section('content_header')
    <div class="row justify-content-center align-item-center">
        <div class="col text-center">
        <h1>CONSIGNAS</h1>
        </div>
    </div>
    
@stop

@section('content')
    <div class="row">
        <div class="col ">
            AQUÍ VA LA TABLA DE CONSIGNAS PENDIENTES
        </div>
    </div>

    <div class="row">
        <div class="col ">
            AQUÍ VA LA TABLA DE CONSIGNAS REALIZADAS
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
