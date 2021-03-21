<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductotallaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productotalla', function (Blueprint $table) {
            $table->foreign('Producto_IdProducto', 'fk_Producto_has_Talla_Producto1')->references('IdProducto')->on('producto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('Talla_IdTalla', 'fk_Producto_has_Talla_Talla1')->references('IdTalla')->on('talla')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productotalla', function (Blueprint $table) {
            $table->dropForeign('fk_Producto_has_Talla_Producto1');
            $table->dropForeign('fk_Producto_has_Talla_Talla1');
        });
    }
}
