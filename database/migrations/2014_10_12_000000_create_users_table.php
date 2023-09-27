<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //más de 250caracteres tiene que ser Text en vez de string
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();//puede quedar vacio
            $table->string('password');            
            $table->rememberToken();//columna varchar, 
            $table->timestamps();//crea dos columna, para saber que hora se crea y modifica
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
