<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {

            $table->bigIncrements('id_venta');
            $table->integer('cantidad_venta');
            $table->double('total_venta');
            $table->unsignedBigInteger('fk_modelo');
            $table->foreign('fk_modelo')->references('id_modelo')->on('modelo');
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
        Schema::dropIfExists('ventas');
    }
};
