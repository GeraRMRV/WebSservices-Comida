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
        Schema::create('pedido_platillos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pedido')->nullable(false);
            $table->unsignedBigInteger('id_platillo')->nullable(false);
            $table->unsignedBigInteger('id_envio')->nullable();
            $table->integer('cantidad')->nullable(false);
            $table->decimal('precio', 10)->nullable();
            $table->timestamps();
            $table->foreign('id_pedido')->references('id')->on('pedidos')->onDelete('cascade');
            $table->foreign('id_platillo')->references('id')->on('platillos')->onDelete('cascade');
            $table->foreign('id_envio')->references('id')->on('envios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_platillos');
    }
};
