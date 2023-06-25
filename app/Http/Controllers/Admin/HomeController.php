<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //evita que puedan ingresar al sistema sin loguearse y solo poniendo las url
    }
    public function index(){
        return view('admin.index');
    }
}
