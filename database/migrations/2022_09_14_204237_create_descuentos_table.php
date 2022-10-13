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
        Schema::create('descuentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_restaurant')->nullable(false);
            $table->string('nombre', 100)->nullable(false);
            $table->decimal('descuento', 10)->nullable();
            $table->dateTime('inicio')->nullable(false);
            $table->dateTime('fin')->nullable(false);
            $table->integer('contador')->nullable(false);
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
        Schema::dropIfExists('descuentos');
    }
};
