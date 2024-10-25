<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name'); // Nombre completo
            $table->string('phone'); // Teléfono
            $table->string('email'); // Correo electrónico
            $table->text('message'); // Mensaje
            $table->timestamps(); // Para las fechas de creación y actualización
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
