<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_det', function (Blueprint $table) {
            $table->integer('IdVenta_det')->primary();
            $table->integer('IdVenta_enc')->index('fk_Pedido_det_Pedido1');
            $table->integer('IdProducto')->index('fk_Pedido_det_Producto1');
            $table->integer('Cantidad')->nullable();
            $table->decimal('PrecioUSD', 18)->nullable();
            $table->decimal('PrecioQtz', 18)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta_det');
    }
}
