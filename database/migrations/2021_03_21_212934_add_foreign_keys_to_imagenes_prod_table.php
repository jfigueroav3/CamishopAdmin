<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToImagenesProdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('imagenes_prod', function (Blueprint $table) {
            $table->foreign('IdProducto', 'fk_Imagenes_prod_Producto1')->references('IdProducto')->on('producto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imagenes_prod', function (Blueprint $table) {
            $table->dropForeign('fk_Imagenes_prod_Producto1');
        });
    }
}
