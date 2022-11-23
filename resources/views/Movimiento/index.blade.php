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
                                                            class="fa fa-list text-alternate"></i></span>
                                                </div>
                                                <div class="tab-subheading">
                                                    Movimientos
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab-minimal-2" data-toggle="tab"
                                                class="nav-link active minimal-tab-btn-2">
                                                <div class="widget-number">
                                                    <span class="pr-2 text-success">
                                                        <i class="fa fa-file text-warning"></i>
                                                    </span>

                                                </div>
                                                <div class="tab-subheading">Documentos
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <!--Panel1-->
                                    @include('Movimiento.stock')
                                    <!--FinPanel1-->

                                    <!--Panel2-->
                                    @include('Documento.index')
                                    <!--FinPanel2-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection