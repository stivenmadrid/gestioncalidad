<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVortesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vortes', function (Blueprint $table) {
            $table->id();
            $table->integer('Numero_Obra');
            $table->string('Nombre_Obra');
            $table->string('Lugar_Obra');
            $table->date('Fecha_Recibido')->nullable();
            $table->date('Fecha_Cotizada')->nullable();
            $table->float('Valor_Antes_Iva');
            $table->float('Valor_Adjudicado');
            $table->string('Tipologia');
            $table->string('Estado');
            $table->integer('m2');
            $table->string('Incluye_Montaje');
            $table->string('Origen');
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
        Schema::dropIfExists('vortes');
    }
}
