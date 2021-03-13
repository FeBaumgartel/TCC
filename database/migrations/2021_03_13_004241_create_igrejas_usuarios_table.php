<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIgrejasUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igrejas_usuarios', function (Blueprint $table) {

            $table->bigIncrements('id')->index();
			$table->unsignedBigInteger('id_usuario')->index();
			$table->unsignedBigInteger('id_igreja')->index();
            $table->timestamps();

			$table->foreign('id_igreja')->references('id')->on('igrejas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_usuario')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('igrejas_usuarios');
    }
}
