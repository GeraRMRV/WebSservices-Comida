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
        Schema::create('valoracion_repartidores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_repartidor')->nullable(false);
            $table->unsignedBigInteger('id_cliente')->nullable(false);
            $table->integer('estrellas')->nullable(false);
            $table->string('texto', 255)->nullable();
            $table->dateTime('fecha')->nullable(false);
            $table->timestamps();
            $table->foreign('id_repartidor')->references('id')->on('repartidores')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valoracion_repartidores');
    }
};
