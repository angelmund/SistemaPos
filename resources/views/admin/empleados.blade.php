@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
    <div class="card">
        <div class="card-body-center">
            <h1 class="bg-primary text-white text-center">Panel de Control  Administrador</h1>
        </div>
    </div>
@stop

@section('content')
@csrf
<div  class="card ">
    <div class="card-body text-center">
        <h5 class="card-title-center"> <i class="fas fa-user"></i>  Listado de usuarios</h5>
        <hr>
    </div>
</div>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            
            <th scope="col">Nombre</th> 
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">email</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Perfil</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ( $empleados as $empleado )
            <tr>
                <!--Muestra los registros -->
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->ap_paterno}}</td> 
                <td>{{$empleado->ap_materno}}</td>
                <td>{{$empleado->email}}</td>
                <td>{{$empleado->telefono}}</td>
                <td>{{$empleado->direccion}}</td>
                <td>{{$empleado->Perfil}}</td>
                
                <!--Termina Muestra los registros -->

                <!-- Celdas para botones-->
                <td>
                    <form action="{{route('empleados.destroy', $empleado->email)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/empleados/{{$empleado->email}}/editempleado" class="btn btn-info">Editar</a>
                        <button class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  
</table>  

<a href="{{ route('admin.createempleado') }}" class="btn btn-primary">CREAR</a>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop