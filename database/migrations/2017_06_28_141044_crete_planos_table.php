<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CretePlanosTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('planos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->enum('status', [0, 1])->comment('0 - ativo 1 - inativo');
            $table->string('nome', 255);
            $table->decimal('valor', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::drop('planos');
    }
}
