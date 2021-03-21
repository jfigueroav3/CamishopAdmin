<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCompraDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('compra_det', function (Blueprint $table) {
            $table->foreign('IdCompra', 'fk_Compra_det_Compra1')->references('IdCompra')->on('compra')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('IdProducto', 'fk_Compra_det_Producto1')->references('IdProducto')->on('producto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compra_det', function (Blueprint $table) {
            $table->dropForeign('fk_Compra_det_Compra1');
            $table->dropForeign('fk_Compra_det_Producto1');
        });
    }
}
