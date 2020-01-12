<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_detalle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('cantidad', 8, 2);
            $table->string('codigo_producto');
            $table->string('detalle');
            $table->string('estado');
            $table->decimal('precio_unitario', 8, 2);
            $table->decimal('sub_total', 8, 2);
            $table->integer('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id')->on('producto');
            $table->integer('id_factura')->unsigned();
            $table->foreign('id_factura')->references('id')->on('factura');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura-detalle');
    }
}