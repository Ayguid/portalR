<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiquidationItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liquidation__items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('liquidation_id');
            $table->integer('nro_liquidacion');
            $table->float('total');
            $table->integer('cantidad_de_ordenes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liquidation__items');
    }
}
