<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_eventos', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
			$table->unsignedBigInteger('id_grupo')->index();
			$table->unsignedBigInteger('id_evento')->index();
            $table->timestamps();

			$table->foreign('id_grupo')->references('id')->on('grupos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_evento')->references('id')->on('eventos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos_eventos');
    }
}
