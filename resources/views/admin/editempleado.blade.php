@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body-center">
            <h1 class="bg-primary text-white text-center">Panel de Control  Administrador</h1>
        </div>
    </div>
@stop

@section('content')
@csrf



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop