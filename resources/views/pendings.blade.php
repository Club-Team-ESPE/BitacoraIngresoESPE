@extends('adminlte::page')

@section('title', 'CONSIGNAS')

@section('content_header')
    <div class="row justify-content-center align-item-center">
        <div class="col text-center">
            <h1>CONSIGNAS UFA-ESPE "SANTO DOMINGO"</h1>
        </div>
    </div>
    <div class="row h-100 mt-1">
        <div class="col-10 offset-1 d-flex align-items-center justify-content-center">
            <button class="btn btn-lg btn-success" mr-5" data-toggle="modal" data-target="#modalNewPendding">NUEVA
                CONSIGNA</button>
        </div>
    </div>

@stop

@section('content')

    <div class="row justify-content-center">

        {{-- TABLA SUPERIOR --}}
        <div class="card col-11">

            <div class="card-body table-responsive pl-2 pr-2">
                <table id="pendingsTable" class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th class="text-center">ORD</th>
                            <th class="text-center">HORA</th>
                            <th class="text-center">DESCRIPCIÓN</th>
                            <th class="text-center">REMITENTE</th>
                            <th class="text-center">REALIZADA</th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($registros1 as $item)
                    <tr>
                        <td>
                            {{ $item->PLACA }}
                        </td>
                        <td style="max-width: 800px; min-width: 200px;
                        white-space: normal;">
                            {{ $item->DESCRIPCION }}
                        </td>
                        <td>
                            {{ $item->REGISTRO }}
                        </td>
                        <td>
                            {{ $item->FECHAHORASALIDA }}
                        </td>
                    </tr>
                @endforeach --}}

                        {{-- MEDIANTE UN CICLO FOR CREAR 4 FILAS CON 4 COLUMNAS CADA UNA --}}
                        @for ($i = 0; $i < 5; $i++)
                            <tr>
                                <td class="text-center">
                                    {{ $i + 1 }}
                                </td>
                                <td>
                                    00:00
                                </td>
                                <td class="text-center">
                                    - NOVEDAD
                                </td>
                                <td class="text-center">
                                    - Capt. Paredes
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-danger" 
                                    data-toggle="modal" data-target="#modalPenddingDone">REALIZADA</button>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>

            </div>

        </div>

        {{-- TABLA CONSIGNAS REALIZADAS --}}
        <div class="card col-12">
            <div class="card-header text-center" style="padding:0; padding-top:3px">
                <div>
                    <h3>CONSIGNAS REALIZADAS</h3>
                </div>
                <div class="card-tools" style=" ">
                </div>
            </div>
            <div class="card-body table-responsive pl-2 pr-2">
                <table id="donePendingsTable" class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th class="text-center">ORD</th>
                            <th class="text-center">DESCRIPCIÓN</th>
                            <th class="text-center">HORA ASIGNACIÓN</th>
                            <th class="text-center">HORA REALIZADO</th>
                            <th class="text-center">REMITENTE</th>
                            <th class="text-center">REALIZADO POR</th>
                            <th class="text-center">NOVEDADES</th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($registros1 as $item)
                    <tr>
                        <td>
                            {{ $item->PLACA }}
                        </td>
                        <td style="max-width: 800px; min-width: 200px;
                        white-space: normal;">
                            {{ $item->DESCRIPCION }}
                        </td>
                        <td>
                            {{ $item->REGISTRO }}
                        </td>
                        <td>
                            {{ $item->FECHAHORASALIDA }}
                        </td>
                    </tr>
                @endforeach --}}

                        {{-- MEDIANTE UN CICLO FOR CREAR 4 FILAS CON 4 COLUMNAS CADA UNA --}}
                        @for ($i = 0; $i < 5; $i++)
                            <tr>
                                <td class="text-center">
                                    {{ $i + 1 }}
                                </td>
                                <td>
                                    -
                                </td>
                                <td class="text-center">
                                    - 00:00
                                </td>
                                <td class="text-center">
                                    - 00:00
                                </td>
                                <td class="text-center">
                                    - Capt. Paredes
                                </td>
                                <td class="text-center">
                                    - Sgto. Paredes
                                </td>
                                <td class="text-center">
                                    S/N
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>

            </div>

        </div>

    </div>

    {{-- MODAL PARA REGISTRAR UNA NUEVA CONSIGNA --}}
    <div class="modal" tabindex="-1" id="modalNewPendding">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title">NUEVA CONSIGNA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div id="modificarRegistro" class="row mt-3" style="">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="newPendding">Detalle la consigna:</label>
                                    <textarea name="newPendding" id="newPendding" class="form-control" rows="3" ></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
                        <button type="submit" id="btnIngreso" style="" class="btn btn-success">GUARDAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- MODAL PARA REGISTRAR UNA CONSIGNA REALIZADA --}}
    <div class="modal" tabindex="-1" id="modalPenddingDone">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title">CONSIGNA REALIZADA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div id="modificarRegistro" class="row mt-3" style="">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="penddingDone">Indíque si tuvo alguna novedad realizando la consinga:</label>
                                    <textarea name="penddingDone" id="penddingDone" class="form-control" rows="3" ></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
                        <button type="submit" id="btnIngreso" style="" class="btn btn-success">GUARDAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        donePendingsTable
        $(document).ready(function() {
            $('#donePendingsTable').DataTable({
                "paging": true,
                "ordering": false,
                "language": {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json'
                },
                "searching": true
            });

        });
    </script>
@stop
