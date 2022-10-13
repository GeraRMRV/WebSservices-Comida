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
        Schema::create('envios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pedido')->nullable(false);
            $table->unsignedBigInteger('id_repartidor')->nullable(false);
            $table->unsignedBigInteger('id_restaurant')->nullable(false);
            $table->unsignedBigInteger('id_cupon')->nullable(false);
            $table->unsignedBigInteger('id_descuento')->nullable(false);
            $table->enum('status', ['pedido','preparacion','transito','entregado', 'problema'])->nullable(false);
            $table->string('observaciones', 200)->nullable(false);
            $table->decimal('total', 10)->nullable();
            $table->decimal('envio', 10)->nullable(false);
            $table->foreign('id_pedido')->references('id')->on('pedidos')->onDelete('cascade');
            $table->foreign('id_repartidor')->references('id')->on('repartidores')->onDelete('cascade');
            $table->foreign('id_restaurant')->references('id')->on('restaurantes')->onDelete('cascade');
            $table->foreign('id_cupon')->references('id')->on('cupones')->onDelete('cascade');
            $table->foreign('id_descuento')->references('id')->on('descuentos')->onDelete('cascade');
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
        Schema::dropIfExists('envios');
    }
};
