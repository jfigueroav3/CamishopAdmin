<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVentaDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('venta_det', function (Blueprint $table) {
            $table->foreign('IdVenta_enc', 'fk_Pedido_det_Pedido1')->references('IdVenta_enc')->on('venta_enc')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('IdProducto', 'fk_Pedido_det_Producto1')->references('IdProducto')->on('producto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venta_det', function (Blueprint $table) {
            $table->dropForeign('fk_Pedido_det_Pedido1');
            $table->dropForeign('fk_Pedido_det_Producto1');
        });
    }
}
