@extends('Layouts.layout')

@section('content')
<div class="app-inner-layout app-inner-layout-page">
    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__content">
            <div class="tab-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Proveedor
                                    <div class="btn-actions-pane-right">
                                        <button
                                            class="mb-2 mr-2 btn-icon btn-shadow btn-outline-2x btn btn-outline-success"
                                            data-toggle="modal" data-target="#NuevoProducto">
                                            <i class="fa fa-plus-circle btn-icon-wrapper">
                                            </i>Nuevo
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive tbodyDiv">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">IdProveedor</th>
                                                <th class="text-center">Usuario</th>
                                                <th class="text-center">Comuna</th>
                                                <th class="text-center">Ciudad</th>
                                                <th class="text-center">FormaPago</th>
                                                <th class="text-center">Rut</th>
                                                <th class="text-center">Dv</th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Giro</th>
                                                <th class="text-center">Direccion</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Fono</th>
                                                <th class="text-center">Activo</th>
                                                <th class="text-center">Vigente</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-tbody">
                                            @foreach($listar as $list)
                                            <tr>
                                                <td class="text-center text-muted">{{$list->IdProveedor}}</td>
                                                <td class="text-center text-muted">
                                                    {{$list->Comuna}}</td>
                                                <td class="text-center text-muted">{{$list->Ciudad}}</td>
                                                <td class="text-center text-muted">{{$list->FormaPago}}</td>
                                                <td class="text-center text-muted">{{$list->Rubro}}</td>
                                                <td class="text-center text-muted">{{$list->Rut}}</td>
                                                <td class="text-center text-muted">{{$list->Rut}}</td>
                                                <td class="text-center text-muted">{{$list->Giro}}</td>
                                                <td class="text-center text-muted">{{$list->Direccion}}</td>
                                                <td class="text-center text-muted">{{$list->Email}}</td>
                                                <td class="text-center text-muted">{{$list->Fono}}</td>
                                                @if($list->Activo == 1)
                                                <td class="text-center text-muted">
                                                    <div class="badge badge-success">
                                                        Activo
                                                    </div>
                                                </td>
                                                @else
                                                <td class="text-center text-muted">
                                                    <div class="badge badge-success">
                                                        Desactivado
                                                    </div>
                                                </td>
                                                @endif
                                                @if($list->Vigente == 1)
                                                <td class="text-center text-muted">
                                                    <div class="badge badge-success">
                                                        Activo
                                                    </div>
                                                </td>
                                                @else
                                                <td class="text-center text-muted">
                                                    <div class="badge badge-success">
                                                        Desactivado
                                                    </div>
                                                </td>
                                                @endif
                                                <td class="text-center">
                                                    <button
                                                        class="mb-2 mr-2 btn-icon btn-icon-only btn-shadow btn-dashed btn btn-outline-warning"
                                                        data-toggle="modal" data-target="#EditarProducto">
                                                        <i class=" fa fa-edit btn-icon-wrapper">
                                                        </i></button>
                                                    <button
                                                        class="mb-2 mr-2 btn-icon btn-icon-only btn-shadow btn-dashed btn btn-outline-danger"
                                                        onclick="eliminar()">
                                                        <i class="fa fa-trash btn-icon-wrapper">
                                                        </i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin Content-->
    </div>
</div>
@endsection