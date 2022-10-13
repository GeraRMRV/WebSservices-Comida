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
        Schema::create('repartidores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_restaurant')->nullable(false);
            $table->string('razon_social', 100)->nullable(false);
            $table->string('nombre', 50)->nullable(false);
            $table->decimal('clave', 50)->nullable();
            $table->string('telefono', 10)->nullable(false);
            $table->string('email')->unique();
            $table->text('horario')->nullable(false);
            $table->timestamps();
            $table->foreign('id_restaurant')->references('id')->on('restaurantes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repartidores');
    }
};
