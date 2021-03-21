<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->integer('IdCompra')->primary();
            $table->integer('IdProveedor')->index('fk_Compra_Proveedor1');
            $table->string('Fecha', 45)->nullable();
            $table->integer('UsuarioCrea')->nullable();
            $table->dateTime('FechaCrea')->nullable();
            $table->integer('IdEmpleado')->index('fk_Compra_Empleado1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra');
    }
}
