<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->integer('IdProducto')->primary();
            $table->string('Nombre', 75);
            $table->string('Descripcion', 100)->nullable();
            $table->integer('IdCategoria')->index('fk_Producto_Categoria');
            $table->decimal('PrecioUnitario', 18)->nullable();
            $table->decimal('Descuento', 18)->nullable();
            $table->string('Genero', 1)->nullable();
            $table->string('Productocol', 45)->nullable();
            $table->integer('IdMarcas')->index('fk_Producto_Marcas');
            $table->integer('IdEmpleado')->index('fk_Producto_Empleado');
            $table->integer('Estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
