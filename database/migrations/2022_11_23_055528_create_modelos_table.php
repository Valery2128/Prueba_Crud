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
        Schema::create('modelo', function (Blueprint $table) {
            $table->bigIncrements ('id_modelo');
            $table->string ('nombre_modelo','50');
            $table->integer('stock_modelo');
            $table->double('precio_unidad');
            $table->unsignedBigInteger('fk_marca');
            $table->foreign('fk_marca')->references('id_marca')->on ('marca');
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
        Schema::dropIfExists('modelos');
    }
};
