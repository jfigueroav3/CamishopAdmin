<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVentaEncTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('venta_enc', function (Blueprint $table) {
            $table->foreign('IdMoneda', 'fk_Pedido_Moneda1')->references('IdMoneda')->on('moneda')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('IdEmpleado', 'fk_Venta_enc_Empleado1')->references('IdEmpleado')->on('empleado')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venta_enc', function (Blueprint $table) {
            $table->dropForeign('fk_Pedido_Moneda1');
            $table->dropForeign('fk_Venta_enc_Empleado1');
        });
    }
}
