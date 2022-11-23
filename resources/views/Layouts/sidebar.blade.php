<div class="app-layout__sidebar-inner dropdown-menu-rounded">
    <div class="nav flex-column">
        <div class="nav-item-header text-primary nav-item">
            Menu
        </div>

        <ul class="vertical-nav-menu">

            <li class="mm-active">
                <a href="/" class="dropdown-item">Home</a>
            </li>

            <li class="mm-active">
                <a href="#" class="">
                    <i class="metismenu-icon fa fa-tasks"></i>
                    Hardware
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('SetPrueba.index') }}" class="dropdown-item">
                            Set Pruebas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('TipoRegistro.index') }}" class="dropdown-item">
                            Tipo Registro
                        </a>
                    </li>
                </ul>
            </li>

            <li class="mm-active">
                <a href="#">
                    <i class="metismenu-icon pe-7s-box2"></i>
                    Inventario
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('Producto.index') }}" class="dropdown-item">Producto
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-box2"></i>
                            Categorias
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('Concepto.index') }}" class="dropdown-item">Concepto
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('Grupo.index') }}" class="dropdown-item">Grupo
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('SubGrupo.index') }}" class="dropdown-item">SubGrupo
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('Movimiento.index') }}" class="dropdown-item">Movimientos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('Proveedor.index') }}" class="dropdown-item">Proveedor
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>