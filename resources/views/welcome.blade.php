@extends('Layouts.layout')

@section('content')

<div class="app-inner-layout app-inner-layout-page">
    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__content">
            <div class="tab-content">
                <div class="container-fluid">
                    <!--Panel de Alerta2-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3 card">
                                <div class="tabs-lg-alternate card-header">
                                    <ul class="nav nav-justified">
                                        <li class="nav-item">
                                            <a href="#tab-minimal-1" data-toggle="tab"
                                                class="nav-link minimal-tab-btn-1">
                                                <div class="widget-number"><span><i
                                                            class="fa fa-check-circle text-success"></i></span>
                                                </div>
                                                <div class="tab-subheading">
                                                    Stock Critico
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab-minimal-2" data-toggle="tab"
                                                class="nav-link active minimal-tab-btn-2">
                                                <div class="widget-number">
                                                    <span class="pr-2 text-success">
                                                        <i class="fa fa-exclamation-circle text-danger"></i>
                                                    </span>

                                                </div>
                                                <div class="tab-subheading">Evento
                                                    Hardware
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab-minimal-3" data-toggle="tab"
                                                class="nav-link minimal-tab-btn-3">
                                                <div class="widget-number text-danger">
                                                    <span><i class="fa fa-tasks text-warning"></i></span>
                                                </div>
                                                <div class="tab-subheading">
                                                    Bitacora Hardware
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab-minimal-4" data-toggle="tab"
                                                class="nav-link minimal-tab-btn-3">
                                                <div class="widget-number text-secondary">
                                                    <span><i class="fa fa-server"></i></span>
                                                </div>
                                                <div class="tab-subheading">
                                                    Espacio Servidores
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <!--Panel1-->
                                    <div class="tab-pane" id="tab-minimal-1">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="main-card mb-3 card">
                                                        <div class="card-header">Stock
                                                            Critico
                                                        </div>
                                                        <div class="">
                                                            <table
                                                                class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">
                                                                            IdProducto
                                                                        </th>
                                                                        <th>Descripcion
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Stock Actual
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Sotck
                                                                            Critico
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Fecha Registro
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Estado
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center text-muted">
                                                                            #345</td>
                                                                        <td>
                                                                            Cintillo Usb
                                                                        </td>
                                                                        <td class="text-center">
                                                                            150</td>
                                                                        <td class="text-center">
                                                                            100
                                                                        </td>
                                                                        <td class="text-center">
                                                                            01/11/2022
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="badge badge-warning">
                                                                                Pending
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="btn-group">
                                                                                <button type="button"
                                                                                    class="mb-2 mr-2 btn-icon btn-shadow btn-outline-2x btn btn-outline-info "
                                                                                    data-bs-toggle="dropdown"
                                                                                    data-bs-display="static"
                                                                                    aria-expanded="false">
                                                                                    <i
                                                                                        class="fa fa-cogs btn-icon-wrapper"></i>
                                                                                </button>
                                                                                <div tabindex="-1" role="menu"
                                                                                    aria-hidden="true"
                                                                                    class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                                                    <h6 tabindex="-1"
                                                                                        class="dropdown-header">
                                                                                        Tipo
                                                                                        Movimiento
                                                                                    </h6>
                                                                                    <button type="button" tabindex="0"
                                                                                        class="dropdown-item"
                                                                                        data-toggle="modal"
                                                                                        data-target="#NuevoMovimiento"><span>Factura
                                                                                            (+)</span>
                                                                                    </button>
                                                                                    <button type="button" tabindex="0"
                                                                                        class="dropdown-item"
                                                                                        data-toggle="modal"
                                                                                        data-target="#AgregarSuministro"><span>Ingreso
                                                                                            Suminstro
                                                                                            (+)</span>
                                                                                    </button>
                                                                                    <button type="button" tabindex="0"
                                                                                        class="dropdown-item"><span>Ajuste
                                                                                            (+)</span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--FinPanel1-->

                                    <!--Panel2-->
                                    <div class="tab-pane" id="tab-minimal-2">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="main-card mb-3 card">
                                                        <div class="card-header">Evento
                                                            Hardware
                                                            <div class="btn-actions-pane-right">
                                                                <button
                                                                    class="mb-2 mr-2 btn-icon btn-shadow btn-outline-2x btn btn-outline-success"
                                                                    data-toggle="modal"
                                                                    data-target="#NuevoTipoRegistro">
                                                                    <i class="fa fa-plus-circle btn-icon-wrapper">
                                                                    </i>Nuevo
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive tbodyDiv2">
                                                            <table
                                                                class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">
                                                                            IdBitacoraEvento
                                                                        </th>
                                                                        <th class="text-center">
                                                                            SetPrueba
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Grupo
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Subgrupo
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Estado
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Usuario</th>
                                                                        <th class="text-center">
                                                                            Observacion
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Activo</th>
                                                                        <th class="text-center">
                                                                            Fecha_Registro
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Fecha_Termino
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Observacion
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Acciones
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center text-muted">
                                                                            #345</td>
                                                                        <td class="text-center text-muted">
                                                                            Revision
                                                                            Ventilador</td>

                                                                        <td class="text-center text-muted">
                                                                            Aire
                                                                            Acondicionado
                                                                        </td>

                                                                        <td class="text-center text-muted">
                                                                            Ahumada Carrier
                                                                        </td>

                                                                        <td class="text-center text-muted">
                                                                            <div class="badge badge-warning">
                                                                                Pending
                                                                            </div>
                                                                        </td>

                                                                        <td class="text-center">
                                                                            jaimesanmon
                                                                        </td>
                                                                        <td class="text-center">
                                                                            Error
                                                                            Ventilador
                                                                        </td>
                                                                        <td class="text-center">
                                                                            1
                                                                        </td>
                                                                        <td class="text-center">
                                                                            10/10/2022
                                                                        </td>
                                                                        <td class="text-center">
                                                                            14/10/2022
                                                                        </td>
                                                                        <td class="text-center">
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <button
                                                                                class="mb-2 mr-2 btn-icon btn-icon-only btn-shadow btn-dashed btn btn-outline-warning"
                                                                                data-toggle="modal"
                                                                                data-target="#EditarTipoRegistro">
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--FinPanel2-->

                                    <!--Panel3-->
                                    <div class="tab-pane" id="tab-minimal-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="main-card mb-3 card">
                                                        <div class="card-header">
                                                            Bitacora
                                                            Hardware
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table
                                                                class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">
                                                                            IdBitacoraHardware
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Grupo
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Subgrupo
                                                                        </th>
                                                                        <th class="text-center">
                                                                            SetPrueba
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Usuario
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Visado
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Fecha_Visado
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Observacion
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center text-muted">
                                                                            #345</td>
                                                                        <td class="text-center text-muted">
                                                                            Aire
                                                                            Acondicionado
                                                                        </td>
                                                                        <td class="text-center text-muted">
                                                                            Ahumada Carrier
                                                                        </td>
                                                                        <td class="text-center text-muted">
                                                                            Equipo
                                                                            Energizado</td>

                                                                        <td class="text-center">
                                                                            jaimesanmon
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox" id="visado"
                                                                                    class="custom-control-input"
                                                                                    name="seltod"><label
                                                                                    class="custom-control-label"
                                                                                    for="visado"></label>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            20/10/2022
                                                                        </td>
                                                                        <td class="text-center">

                                                                        </td>
                                                                        <td class="text-center">
                                                                            <button
                                                                                class="mb-2 mr-2 btn-icon btn-icon-only btn-shadow btn-dashed btn btn-outline-warning"
                                                                                data-toggle="modal"
                                                                                data-target="#EditarTipoRegistro">
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
                                                                    <tr>
                                                                        <td class="text-center text-muted">
                                                                            #345</td>
                                                                        <td class="text-center text-muted">
                                                                            Aire
                                                                            Acondicionado
                                                                        </td>
                                                                        <td class="text-center text-muted">
                                                                            Ahumada Carrier
                                                                        </td>
                                                                        <td class="text-center text-muted">
                                                                            Revision
                                                                            Temperatura</td>

                                                                        <td class="text-center">
                                                                            jaimesanmon
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox" id="visado2"
                                                                                    class="custom-control-input"
                                                                                    name="seltod"><label
                                                                                    class="custom-control-label"
                                                                                    for="visado2"></label>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            20/10/2022
                                                                        </td>
                                                                        <td class="text-center">

                                                                        </td>
                                                                        <td class="text-center">
                                                                            <button
                                                                                class="mb-2 mr-2 btn-icon btn-icon-only btn-shadow btn-dashed btn btn-outline-warning"
                                                                                data-toggle="modal"
                                                                                data-target="#EditarTipoRegistro">
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
                                                                    <tr>
                                                                        <td class="text-center text-muted">
                                                                            #345</td>
                                                                        <td class="text-center text-muted">
                                                                            Aire
                                                                            Acondicionado
                                                                        </td>
                                                                        <td class="text-center text-muted">
                                                                            Ahumada Carrier
                                                                        </td>
                                                                        <td class="text-center text-muted">
                                                                            Revision
                                                                            Ventilador</td>

                                                                        <td class="text-center">
                                                                            jaimesanmon
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox" id="visado3"
                                                                                    class="custom-control-input"
                                                                                    name="seltod"><label
                                                                                    class="custom-control-label"
                                                                                    for="visado3"></label>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            20/10/2022
                                                                        </td>
                                                                        <td class="text-center">

                                                                        </td>
                                                                        <td class="text-center">
                                                                            <button
                                                                                class="mb-2 mr-2 btn-icon btn-icon-only btn-shadow btn-dashed btn btn-outline-warning"
                                                                                data-toggle="modal"
                                                                                data-target="#EditarTipoRegistro">
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
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th class="text-center">

                                                                        </th>
                                                                        <th class="text-center">

                                                                        </th>
                                                                        <th class="text-center">

                                                                        </th>
                                                                        <th class="text-center">

                                                                        </th>
                                                                        <th class="text-center">
                                                                            Seleccionar Todo
                                                                        </th>
                                                                        <th class="text-center">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="select-all"><label
                                                                                    class="custom-control-label"
                                                                                    for="select-all">
                                                                                </label>
                                                                            </div>
                                                                        </th>
                                                                        <th class="text-center">

                                                                        </th>
                                                                        <th class="text-center">

                                                                        </th>
                                                                        <th class="text-center">
                                                                        </th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                        <div class="d-block text-center card-footer">
                                                            <button class="btn-wide btn btn-success"
                                                                onclick="registrar()">Registrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--FinPanel3-->

                                    <!--Panel4-->
                                    <div class="tab-pane" id="tab-minimal-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="main-card mb-3 card">
                                                        <div class="card-header">Espacio
                                                            Servidores
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table
                                                                class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">
                                                                            IdBitacoraServer
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Usuario
                                                                        </th>
                                                                        <th class="text-center">
                                                                            IpServer
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Unidad
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Espacio
                                                                            Disponible
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Espacio Critico
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Espacio Total
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Fecha_Registro
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Fecha_Revision
                                                                        </th>
                                                                        <th class="text-center">
                                                                            Visado</th>
                                                                        <th class="text-center">
                                                                            Activo</th>
                                                                        <th class="text-center">
                                                                            Observacion</th>
                                                                        <th class="text-center">
                                                                            Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center text-muted">
                                                                            #345</td>
                                                                        <td class="text-center">
                                                                            jaimesanmon</td>
                                                                        <td class="text-center">
                                                                            10.0.0.99
                                                                        </td>
                                                                        <td class="text-center">
                                                                            C:\
                                                                        </td>
                                                                        <td class="text-center">
                                                                            1 TB
                                                                        </td>
                                                                        <td class="text-center">
                                                                            500 GB
                                                                        </td>
                                                                        <td class="text-center">
                                                                            500 GB
                                                                        </td>
                                                                        <td class="text-center">
                                                                            16/10/2022
                                                                        </td>
                                                                        <td class="text-center">
                                                                            19/10/2022
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="custom-checkbox custom-control">
                                                                                <input type="checkbox"
                                                                                    id="exampleCustomCheckbox13"
                                                                                    class="custom-control-input"><label
                                                                                    class="custom-control-label"
                                                                                    for="exampleCustomCheckbox13"></label>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div class="badge badge-success">
                                                                                Activo</div>
                                                                        </td>
                                                                        <td class="text-center">

                                                                        </td>
                                                                        <td class="text-center">
                                                                            <button
                                                                                class="mb-2 mr-2 btn-icon btn-icon-only btn-shadow btn-dashed btn btn-outline-warning"
                                                                                data-toggle="modal"
                                                                                data-target="#EditarTipoRegistro">
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--FinPanel4-->
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