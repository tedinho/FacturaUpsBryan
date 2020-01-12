<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cli_razon_social');
            $table->string('cli_celular');
            $table->string('cli_direccion');
            $table->string('estado');
            $table->string('cli_mail');
            $table->string('cli_numero_identificacion');
            $table->timestamp('fecha');
            $table->decimal('importe_total', 8, 2);
            $table->decimal('iva_cobrado', 8, 2);
            $table->decimal('total_sin_impuestos', 8, 2);
            //CLAVE FORANEA
            $table->integer('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id')->on('cliente');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}