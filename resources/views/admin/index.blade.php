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
                <p>VER</p>
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
                <p>VER</p>
            </div>
            <div class="icon">
                <i class="far fa-handshake"></i>
            </div>
            <a href="#" class="small-box-footer"> Ingresar <i class="fas fa-arrow-circle-right"></i></a>
            
        </div>
    </div>
    
    <!---- Caja 3 ----->
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>Compras</h3>
                <p>VER</p>
            </div>
            <div class="icon">
                <i class="far fa-money-bill-alt"></i>
            </div>
            <a href="#" class="small-box-footer"> Ingresar <i class="fas fa-arrow-circle-right"></i></a>
            
        </div>
    </div>

    <!---- Caja 4 
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>Total Productos</h3>
                <p>VER</p>
            </div>
            <div class="icon">
                <i class="fas fa-receipt"></i>
            </div>
            <a href="#" class="small-box-footer"> Ingresar <i class="fas fa-arrow-circle-right"></i></a>
            
        </div>
    </div> ----->
    
</div>

<section class="col-lg-7 connectedSortable ui-sortable">
    <!-- Custom tabs (Charts with tabs)-->
    <div class="card">
        <div class="card-header ui-sortable-handle">
            <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
            </h3>
        </div>
        <div class="card-body">
            <div class="tab-content p-0"></div>
        </div>
    </div>
    <div class="chartjs-size-monitor-shrink">
        <canvas id="myChart" width="598" height="280" style="display: block; box-sizing:
        border-box; min-width: 598px; max-width: 598px; min-height:
        280px; max-height: 280px;" class="chartjs-render-monitor"></canvas>
    </div>
</section>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop