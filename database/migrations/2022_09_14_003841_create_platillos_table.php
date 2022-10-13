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
        Schema::create('platillos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_restaurant')->nullable(false);
            $table->string('nombre', 100)->nullable(false);
            $table->string('descripcion', 50)->nullable(false);
            $table->decimal('precio')->nullable();
            $table->string('imagen', 100)->nullable(true);
            $table->string('categoria', 100)->nullable(true);
            $table->enum('status', ['disponible', 'no disponible'])->nullable(false);
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
        Schema::dropIfExists('platillos');
    }
};
