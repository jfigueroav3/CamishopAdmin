<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonedaEquivTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moneda_equiv', function (Blueprint $table) {
            $table->integer('IdMoneda_equiv')->primary();
            $table->decimal('Tasa', 18)->nullable();
            $table->integer('IdMoneda')->index('fk_Moneda_equiv_Moneda1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moneda_equiv');
    }
}
