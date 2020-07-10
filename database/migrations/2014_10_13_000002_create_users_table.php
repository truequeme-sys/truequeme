<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name', 50);
            $table->string('email', 100)->unique();
            $table->string('apellido_paterno', 50);
            $table->string('apellido_materno', 50)->nullable();
            $table->string('rfc', 13);
            $table->string('codigo_postal',5)->nullable();
            $table->string('telefono', 13)->nullable();
            $table->string('celular', 13)->nullable();
            $table->string('whatsapp', 13)->nullable();
            $table->string('razon_social', 50)->nullable();
            $table->string('foto',50)->nullable();
            $table->string('password');
            $table->rememberToken();
            
            // $table->unsignedBigInteger('empresa_id')->nullable();
            $table->timestamps();

            // $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('set null');
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
}
