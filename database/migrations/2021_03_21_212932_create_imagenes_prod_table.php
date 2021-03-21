<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenesProdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes_prod', function (Blueprint $table) {
            $table->integer('IdImagenes_prod')->primary();
            $table->integer('IdProducto')->index('fk_Imagenes_prod_Producto1');
            $table->dateTime('FechaCarga')->nullable();
            $table->string('RutaImagen', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenes_prod');
    }
}
