<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaEncTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_enc', function (Blueprint $table) {
            $table->integer('IdVenta_enc')->primary();
            $table->dateTime('Fecha_venta');
            $table->dateTime('Fecha_requiere')->nullable();
            $table->string('Persona_recibe', 100);
            $table->string('Telefono_contacto', 20)->nullable();
            $table->string('Observaciones')->nullable();
            $table->integer('IdMoneda')->index('fk_Pedido_Moneda1');
            $table->dateTime('FechaMod')->nullable();
            $table->integer('IdUsuarioMod')->nullable();
            $table->integer('IdEmpleado')->index('fk_Venta_enc_Empleado1');
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
        Schema::dropIfExists('venta_enc');
    }
}
