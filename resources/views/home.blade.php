@extends('layouts.app')

@section('Home')
<!-- Css del Home --> 
@include('css.home.home')
@include('modal.modal')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido al gestor de productos <a href="#" class="pull-right"><button id="<% producto.id %>" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Modal_producto" ng-click="agregar(producto.id)">Agregar Producto</button></a></div>

                <!-- Muestra cuadro de carga --> 
                <div ng-show="loading" id="preloader_carga">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="loader">
                                <div class="loader-inner">
                                    <div class="loading one"></div>
                                </div>
                                <div class="loader-inner">
                                    <div class="loading two"></div>
                                </div>
                                <div class="loader-inner">
                                    <div class="loading three"></div>
                                </div>
                                <div class="loader-inner">
                                    <div class="loading four"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Al no encontrar resultados  --> 
                <div ng-show="!loading && productos.length <= 0">No se encontraron resultados</div>
                

                  <div class="panel-body" ng-show="productos.length != 0" ng-repeat="producto in productos">
                    <div class="card card-personalizada col-md-12">
                        <div class="card-block">
                            <h4 class="card-title"><% producto.nombre %></h4>
                            <h6 class="card-subtitle mb-2 text-muted"><% producto.descripcion %></h6>
                            <p class="card-text"><% producto.costo | currency  %></p>
                            <a href="#" class="card-link"><button id="<% producto.id %>" type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#Modal_producto" ng-click="editar(producto.id)">Editar</button></a>
                            <a href="#" class="card-link"><button type="button" class="btn btn-danger btn-md" ng-click="eliminarProducto(producto.id)">Eliminar</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
