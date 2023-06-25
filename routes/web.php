<?php

use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::resource('empleados','App\Http\Controllers\EmpleadosController' );
Route::resource('createempleado','App\Http\Controllers\EmpleadosControllerController' );
Route::get('/admin/createempleado', [EmpleadosController::class, 'create'])->name('admin.createempleado');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
