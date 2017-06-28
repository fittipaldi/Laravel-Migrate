<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->enum('status', [0, 1, 2])->comment('0 - pendente, 1 - aprovado, 2 - cancelado')->default(0);
            $table->integer('patrocinador_id')->nullable()->comment('foreing key para um parent id dessa mesma tabela');
            $table->datetime('data_cadastro');
            $table->datetime('data_aprovado')->nullable();
            $table->datetime('data_cancelado')->nullable();
            $table->string('usuario', 50)->unique();
            $table->string('senha', 100);
            $table->string('nome', 255);
            $table->string('email', 200);
            $table->enum('sexo', ['m', 'f'])->comment('m - masculino, f - feminino');
            $table->date('data_nascimento');
            $table->string('cpf', 50);
            $table->string('rg', 50);
            $table->string('telefone', 25);
            $table->string('celular', 25);
            $table->string('carteira_bitcoin', 255);
            $table->enum('lado_binario', ['d', 'e'])->comment('e - esquerda d - direita')->default('d');
            $table->string('avatar', 255);
            $table->string('ip_cadastro', 50);
            $table->integer('plano_id')->unsigned();
            $table->string('token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::drop('cadastros');
    }
}
