<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MV Servicios - Dashboard</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <!--link rel="icon" href="favicon2.ico"-->
    <link rel="icon" type="image/jpg" href="assets/images/favicon2.ico" />

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="assets/css/main.e15bf966f0aa375f9cd4.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-header">
                    <!--Titulo Pagina Principal-->
                    <div class="page-title-heading">
                        Sistema Soporte
                        <div class="page-title-subheading">
                            Monitoreo - Control
                        </div>
                    </div>
                    <!--Fin Titulo Pagina Principal-->

                    @include('Layouts.perfil')
                </div>

                <div class="app-inner-layout app-inner-layout-page">
                    <div class="app-inner-bar">
                        <div class="inner-bar-left">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link show-menu-btn">
                                        <i class="fa fa-align-left mr-2"></i>
                                        <span class="hide-text-md">Mostrar Menu</span>
                                    </a>
                                    <a href="#" class="nav-link close-menu-btn">
                                        <i class="fa fa-align-right mr-2"></i>
                                        <span class="hide-text-md">Cerrar Menu</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="app-inner-layout__wrapper">
                        <div class="app-inner-layout__sidebar">
                            @include('Layouts.sidebar')
                        </div>
                        <!--Content-->
                        <div class="container">
                            @yield('content')
                        </div>
                        <!--FinContent-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NuevoMovimientoFactura -->
    <div class="modal fade" id="NuevoMovimiento" tabindex="-1" role="dialog" aria-labelledby="verDocumento"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Factura</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Rut</span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Nombre</span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                                <br>
                            </div>
                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-5">
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">N°
                                            Documento</span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Giro</span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Direccion</span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Comuna</span>
                                </div>
                                <select type="select" id="Id_PoolWeb" name="Id_PoolWeb" class="custom-select">
                                    <option value="">Select</option>
                                    <option>Value 1 Value 1 Value 1</option>
                                    <option>Value 2</option>
                                    <option>Value 3</option>
                                    <option>Value 4</option>
                                    <option>Value 5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Ciudad</span>
                                </div>
                                <select type="select" id="Id_PoolWeb" name="Id_PoolWeb" class="custom-select">
                                    <option value="">Select</option>
                                    <option>Value 1 Value 1 Value 1</option>
                                    <option>Value 2</option>
                                    <option>Value 3</option>
                                    <option>Value 4</option>
                                    <option>Value 5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Forma Pago</span>
                                </div>
                                <select type="select" id="Id_PoolWeb" name="Id_PoolWeb" class="custom-select">
                                    <option value="">Select</option>
                                    <option>Value 1 Value 1 Value 1</option>
                                    <option>Value 2</option>
                                    <option>Value 3</option>
                                    <option>Value 4</option>
                                    <option>Value 5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Email</span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                                <br>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Fono</span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Rubro</span>
                                </div>
                                <select type="select" id="Id_PoolWeb" name="Id_PoolWeb" class="custom-select">
                                    <option value="">Select</option>
                                    <option>Value 1 Value 1 Value 1</option>
                                    <option>Value 2</option>
                                    <option>Value 3</option>
                                    <option>Value 4</option>
                                    <option>Value 5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button class="mb-2 mr-2 btn-icon btn-icon-only btn-shadow btn-dashed btn btn-outline-success"
                        data-toggle="modal" data-target="#">
                        Guardar
                    </button>
                    <button class="mb-2 mr-2 btn-icon btn-icon-only btn-shadow btn-dashed btn btn-outline-warning"
                        data-toggle="modal" data-target="#">
                        Editar
                    </button>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Detalle
                                    <div class="btn-actions-pane-right">
                                        <button
                                            class="mb-2 mr-2 btn-icon btn-shadow btn-outline-2x btn btn-outline-success"
                                            data-toggle="modal" data-target="#AgregarProducto">
                                            <i class="fa fa-plus-circle btn-icon-wrapper"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Item</th>
                                                <th class="text-center">IdProducto</th>
                                                <th class="text-center">Cantidad</th>
                                                <th class="text-center">Neto</th>
                                                <th class="text-center">IVA
                                                </th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center text-muted">1</td>
                                                <td class="text-center text-muted">#345</td>
                                                <td class="text-center text-muted">10</td>
                                                <td class="text-center text-muted">1000
                                                </td>
                                                <td class="text-center text-muted">19000</td>
                                                <td class="text-center text-muted">119000</td>
                                                <td class="text-center">
                                                    <button
                                                        class="mb-2 mr-2 btn-icon btn-icon-only btn-shadow btn-dashed btn btn-outline-warning"
                                                        data-toggle="modal" data-target="#AgregarCantidad">
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
                <div class="modal-footer">
                    <button class="mb-2 mr-2 btn-icon btn-shadow btn-outline-2x btn btn-outline-success"
                        onclick="registrar()">
                        Registrar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- FinModalsNuevoMovimientoFactura -->

    <!-- IngresoSuministro-->
    <div class="modal fade" id="AgregarSuministro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-header">Detalle
                    <div class="btn-actions-pane-right">
                        <button class="mb-2 mr-2 btn-icon btn-shadow btn-outline-2x btn btn-outline-success"
                            data-toggle="modal" data-target="#AgregarProducto">
                            <i class="fa fa-plus-circle btn-icon-wrapper"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">IdProducto</th>
                                        <th class="text-center">Descripcion</th>
                                        <th class="text-center">Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center text-muted">#345</td>
                                        <td class="text-center text-muted">Cintillos</td>
                                        <td class="text-center text-muted">10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="mb-2 mr-2 btn-icon btn-shadow btn-outline-2x btn btn-outline-success"
                        onclick="registrar()">
                        Registrar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- FinModalsIngresoSuministro-->

    <!-- AgregarProductoFactura -->
    <div class="modal fade" id="AgregarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">IdProducto</th>
                                        <th class="text-center">Descripcion</th>
                                        <th class="text-center">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center text-muted">#345</td>
                                        <td class="text-center text-muted">Cintillo</td>
                                        <td>
                                            <button
                                                class="mb-2 mr-2 btn-icon btn-shadow btn-outline-2x btn btn-outline-success"
                                                data-toggle="modal" data-target="#AgregarCantidad">
                                                <i class="fa fa-plus-circle btn-icon-wrapper"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="mb-2 mr-2 btn-icon btn-shadow btn-outline-2x btn btn-outline-success"
                        onclick="registrar()">
                        Registrar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- FinModalsAgregarProducto -->

    <!-- IngresoCantidad-->
    <div class="modal fade" id="AgregarCantidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cantidad</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <div>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Cantidad</span>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="mb-2 mr-2 btn-icon btn-shadow btn-outline-2x btn btn-outline-success"
                        onclick="registrar()">
                        Registrar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- FinModalsIngresoCantidad-->

    <!--Footer-->
    @include('Layouts.footer')
    <!--Fin Footer-->

    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <script type="text/javascript" src="./assets/scripts/main.e15bf966f0aa375f9cd4.js"></script>
    <!--Script Alert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/scripts/alertas.js"></script>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <!--Seleccion Multiple-->
    <script>
    document.getElementById('select-all').onclick = function() {
        var checkboxes = document.getElementsByName('seltod');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    }
    </script>
</body>

</html>