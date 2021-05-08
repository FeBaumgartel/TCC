<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_grupos', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
			$table->unsignedBigInteger('id_usuario')->index();
			$table->unsignedBigInteger('id_grupo')->index();
            $table->timestamps();

			$table->foreign('id_usuario')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_grupo')->references('id')->on('grupos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_grupos');
    }
}
