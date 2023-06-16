@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body-center">
            <h1 class="bg-primary text-white text-center">Panel de Control para Administrador</h1>
        </div>
    </div>
@stop

@section('content')
@csrf
<!-- cajas grandesv--->
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <!-- cajas chica-->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>Proveedores</h3>
                <p>Nuevo Provedor</p>
            </div>
            <div class="icon">
                <i class="fas fa-truck"></i>
            </div>
            <a href="#" class="small-box-footer"> Ingresar <i class="fas fa-arrow-circle-right"></i></a>
            
        </div>
    </div>

        <!---Caja 2 --->
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Ventas</h3>
                <p>Nueva Venta</p>
            </div>
            <div class="icon">
                <i class="far fa-money-bill-alt"></i>
            </div>
            <a href="#" class="small-box-footer"> Ingresar <i class="fas fa-arrow-circle-right"></i></a>
            
        </div>
    </div>
    
    <!---- Caja 3 ----->
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="col'lg'3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>Hola</h3>
                    <p>Hola 23</p>
                </div>
                <div class="icon">
                    <i class="fas fa-truck"></i>
                </div>
                <a href="#" class="small-box-footer"> Ingresar <i class="fas fa-arrow-circle-right"></i></a>
                
            </div>
        </div>
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop