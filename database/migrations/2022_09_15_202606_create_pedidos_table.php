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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente')->nullable(false);
            $table->datetime('fecha')->nullable(false);
            $table->string('ubicacion_lat', 100)->nullable(false);
            $table->string('ubicacion_long',100)->nullable(false);
            $table->enum('status', ['pedido','entrega parcial','entregado','cancelado'])->nullable(false);
            $table->decimal('iva', 10)->nullable(false);
            $table->enum('forma_pago', ['efectivo', 'electronico'])->nullable(false);
            $table->decimal('total', 10)->nullable(false);
            $table->decimal('envios', 10)->nullable(false);
            $table->timestamps();
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
        Schema::dropIfExists('pedidos');
    }
};
