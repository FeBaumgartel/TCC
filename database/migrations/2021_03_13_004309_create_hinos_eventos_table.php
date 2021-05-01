<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinosEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinos_eventos', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->integer('sequencia');
			$table->unsignedBigInteger('id_hino')->index();
			$table->unsignedBigInteger('id_evento')->index();
            $table->timestamps();

			$table->foreign('id_evento')->references('id')->on('eventos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_hino')->references('id')->on('hinos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinos_eventos');
    }
}
