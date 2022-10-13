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
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social', 100)->nullable(false);
            $table->string('nombre_contacto', 100)->nullable(false);
            $table->string('clabe', 100)->nullable(false);
            $table->string('direccion', 255)->nullable(false);
            $table->char('telefono', 10)->nullable();
            $table->string('email',50)->nullable();
            $table->string('facebook', 50)->nullable(true);
            $table->string('twitter', 50)->nullable(true);
            $table->string('instagram', 50)->nullable(false);
            $table->string('logotipo', 50)->nullable(false);
            $table->enum('status', ['ABIERTO', 'CERRADO']);
            $table->string('ubicacion_lat', 200)->nullable(false);
            $table->string('ubicacion_long', 200)->nullable(false);
            $table->enum('verificado', ['SOLICITUD', 'APROBADO', 'RECHAZADO']);
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurantes');
    }
};
