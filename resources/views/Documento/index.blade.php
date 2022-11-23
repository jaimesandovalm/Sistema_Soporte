<div class="tab-pane" id="tab-minimal-2">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Documentos
                        <div class="btn-actions-pane-right">
                            <div class="btn-group">
                                <button type="button"
                                    class="mb-2 mr-2 btn-icon btn-shadow btn-outline-2x btn btn-outline-info "
                                    data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    <i class="fa fa-cogs btn-icon-wrapper"></i>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                    class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                    <h6 tabindex="-1" class="dropdown-header">
                                        Tipo Movimiento
                                    </h6>
                                    <button type="button" tabindex="0" class="dropdown-item" data-toggle="modal"
                                        data-target="#"><span>Factura
                                            (+)</span>
                                    </button>
                                    <button type="button" tabindex="0" class="dropdown-item" data-toggle="modal"
                                        data-target="#"><span>Ingreso
                                            Suminstro
                                            (+)</span>
                                    </button>
                                    <button type="button" tabindex="0" class="dropdown-item"><span>Egreso
                                            Suministro
                                            (-)</span>
                                    </button>
                                    <button type="button" tabindex="0" class="dropdown-item"><span>Ajuste
                                            (+)</span>
                                    </button>
                                    <button type="button" tabindex="0" class="dropdown-item"><span>Ajuste
                                            (-)</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive tbodyDiv2">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        IdDocumento
                                    </th>

                                    <th class="text-center">
                                        Proveedor
                                    </th>

                                    </th>
                                    <th class="text-center">
                                        NumeroDocumento
                                    </th>
                                    <th class="text-center">
                                        Fecha Documento
                                    </th>
                                    <th class="text-center">
                                        Total
                                    </th>
                                    <th class="text-center">
                                        Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listar as $list)
                                <tr>
                                    <td class="text-center text-muted">{{$list->IdDocumento}}</td>

                                    <td class="text-center text-muted">{{$list->Nombre}}</td>

                                    <td class="text-center">{{$list->IdDocumento}}</td>
                                    <td class="text-center">{{$list->Email}}</td>
                                    <td class="text-center">{{$list->Total}}</td>
                                    <td class="text-center">
                                        <a href="../Documento/verDocumento.html"
                                            class="mb-2 mr-2 btn-icon btn-icon-only btn-shadow btn-dashed btn btn-outline-info"><i
                                                class="fa fa-eye btn-icon-wrapper">
                                            </i></a>
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