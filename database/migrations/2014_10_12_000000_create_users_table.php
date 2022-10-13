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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();  
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');         
            $table->enum('tipo', [1, 2, 3]); // Equivalente a tablas: 1 = clientes, 2 = repartidores, 3 = restaurantes         
            $table->string('api_token', 100)->nullable(true)->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
