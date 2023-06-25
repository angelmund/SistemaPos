<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        Schema::create('empleados', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('perfil');
            $table->string('clave');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
