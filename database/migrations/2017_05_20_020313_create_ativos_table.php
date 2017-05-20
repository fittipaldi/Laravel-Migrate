<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ativos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fatura');
            $table->integer('id_cadastro');
            $table->datetime('data');
            $table->integer('mes');
            $table->integer('ano');
            $table->enum('status', [0, 1]);
            $table->decimal('valor', 10, 2);
            $table->rememberToken();
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
        Schema::drop('ativos');
    }
}