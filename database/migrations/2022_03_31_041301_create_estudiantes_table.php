<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('matricula', 50)->nullable();
            $table->string('nombre', 50)->nullable();
            $table->string('apellidoP', 50)->nullable();
            $table->string('apellidoM', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('calle', 50)->nullable();
            $table->string('colonia', 50)->nullable();
            $table->string('codigoPostal', 50)->nullable();
            $table->string('celular', 10)->nullable();
            $table->date('fechaNacimiento')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
