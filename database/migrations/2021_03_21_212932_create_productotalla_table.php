<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductotallaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productotalla', function (Blueprint $table) {
            $table->integer('Producto_IdProducto');
            $table->integer('Talla_IdTalla')->index('fk_Producto_has_Talla_Talla1');
            $table->integer('Existencia')->nullable();
            $table->primary(['Producto_IdProducto', 'Talla_IdTalla']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productotalla');
    }
}
