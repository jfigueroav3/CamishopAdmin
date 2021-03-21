<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMonedaEquivTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('moneda_equiv', function (Blueprint $table) {
            $table->foreign('IdMoneda', 'fk_Moneda_equiv_Moneda1')->references('IdMoneda')->on('moneda')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('moneda_equiv', function (Blueprint $table) {
            $table->dropForeign('fk_Moneda_equiv_Moneda1');
        });
    }
}
