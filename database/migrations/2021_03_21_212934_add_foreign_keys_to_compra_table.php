<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('compra', function (Blueprint $table) {
            $table->foreign('IdEmpleado', 'fk_Compra_Empleado1')->references('IdEmpleado')->on('empleado')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('IdProveedor', 'fk_Compra_Proveedor1')->references('IdProveedor')->on('proveedor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compra', function (Blueprint $table) {
            $table->dropForeign('fk_Compra_Empleado1');
            $table->dropForeign('fk_Compra_Proveedor1');
        });
    }
}
