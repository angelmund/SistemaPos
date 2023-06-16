<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;  //ubicacion del controlador 

Route::get('', [HomeController::class, 'index']);

?>