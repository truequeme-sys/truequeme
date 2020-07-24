<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social', 50);
            $table->string('rfc', 50);
            $table->string('direccion', 50);
            $table->string('colonia', 50);
            $table->string('ciudad', 50);
            $table->string('estado', 50);
            $table->string('pais', 50);
            $table->string('foto');
            $table->timestamps();

            // $table->foreign('giro_id')->references('id')->on('giros')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
