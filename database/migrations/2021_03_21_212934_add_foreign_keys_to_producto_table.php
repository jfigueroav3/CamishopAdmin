<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('producto', function (Blueprint $table) {
            $table->foreign('IdCategoria', 'fk_Producto_Categoria')->references('IdCategoria')->on('categoria')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('IdEmpleado', 'fk_Producto_Empleado')->references('IdEmpleado')->on('empleado')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('IdMarcas', 'fk_Producto_Marcas')->references('IdMarcas')->on('marcas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('producto', function (Blueprint $table) {
            $table->dropForeign('fk_Producto_Categoria');
            $table->dropForeign('fk_Producto_Empleado');
            $table->dropForeign('fk_Producto_Marcas');
        });
    }
}
