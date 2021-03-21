<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_det', function (Blueprint $table) {
            $table->integer('IdCompra_det')->primary();
            $table->integer('IdCompra')->index('fk_Compra_det_Compra1');
            $table->integer('IdProducto')->index('fk_Compra_det_Producto1');
            $table->integer('Cantidad')->nullable();
            $table->string('Compra_detcol', 45)->nullable();
            $table->decimal('CostoUSD', 18)->nullable();
            $table->decimal('CostoQTZ', 18)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra_det');
    }
}
