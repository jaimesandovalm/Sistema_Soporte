@extends('Layouts.layout')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <!--Content-->
        <div class="app-inner-layout app-inner-layout-page">
            <div class="app-inner-layout__wrapper">
                <div class="app-inner-layout__content">
                    <div class="tab-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-header">SetPrueba
                                            <div class="btn-actions-pane-right">
                                                <button
                                                    class="mb-2 mr-2 btn-icon btn-shadow btn-outline-2x btn btn-outline-success"
                                                    data-toggle="modal" data-target="#NuevoSetPrueba">
                                                    <i class="fa fa-plus-circle btn-icon-wrapper">
                                                    </i>Nuevo
                                                </button>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table
                                                class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">IdSetPrueba
                                                        </th>
                                                        <th>SubGrupo</th>
                                                        <th class="text-center">Usuario</th>
                                                        <th class="text-center">
                                                            GlosaSetPrueba
                                                        </th>
                                                        <th class="text-center">Activo</th>
                                                        <th class="text-center">Vigente</th>
                                                        <th class="text-center">Ip</th>
                                                        <th class="text-center">PingOnline
                                                        </th>
                                                        <th class="text-center">Acciones
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($listar as $list)
                                                    <tr>
                                                        <td class="text-center text-muted">
                                                            {{$list->IdSetPrueba}}
                                                        </td>
                                                        <td class="text-center text-muted">
                                                            {{$list->SubGrupo}}
                                                        </td>
                                                        <td class="text-center text-muted">
                                                            {{$list->Usuario}}</td>
                                                        <td class="text-center text-muted">
                                                            {{$list->GlosaSetPrueba}}
                                                        </td>
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
                                                                Vigente
                                                            </div>
                                                        </td>
                                                        @else
                                                        <td class="text-center text-muted">
                                                            <div class="badge badge-warning">
                                                                NoVigente
                                                            </div>
                                                        </td>
                                                        @endif
                                                        <td class="text-center text-muted">
                                                            {{$list->Ip}}
                                                        </td>
                                                        <td class="text-center text-muted">
                                                            {{$list->PingOnline}}
                                                        </td>
                                                        <td class="text-center">
                                                            <button
                                                                class="mb-2 mr-2 btn-icon btn-icon-only btn-shadow btn-dashed btn btn-outline-warning"
                                                                data-toggle="modal" data-target="#EditarSetPrueba">
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
        <!--FinContent-->
    </div>
</div>
@endsection