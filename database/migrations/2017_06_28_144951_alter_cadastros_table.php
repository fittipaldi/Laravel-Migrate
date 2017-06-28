<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::table('cadastros', function (Blueprint $table) {
            $table->foreign('plano_id')->references('id')->on('planos');
            $table->foreign('patrocinador_id')->references('id')->on('cadastros');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        //
    }
}
