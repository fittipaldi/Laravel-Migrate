<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('aprovado', [0, 1])->comment('0 - nao aprovado 1 - aprovado');
            $table->integer('id_patrocinador');
            $table->datetime('data_cadastro');
            $table->datetime('data_aprovado');
            $table->datetime('data_cancelado');
            $table->string('usuario')->unique();
            $table->string('senha');
            $table->string('nome');
            $table->string('email');
            $table->enum('sexo', ['m', 'f'])->comment('m - masculino, f - feminino');
            $table->date('data_nascimento');
            $table->string('cpf');
            $table->string('rg');
            $table->string('cnpj');
            $table->string('inscricao_estadual');
            $table->string('tel_primario');
            $table->string('tel_secundario');
            $table->string('celular');
            $table->string('razao_social');
            $table->string('banco_nome');
            $table->string('banco_agencia');
            $table->string('banco_agencia_digito');
            $table->string('banco_conta');
            $table->string('banco_conta_digito');
            $table->string('banco_operacao');
            $table->string('banco_conta_tipo');
            $table->enum('tipop_essoa', ['f', 'j'])->comment('f - pessoa fisica, j - pessoa juridica');
            $table->string('estadocivil');
            $table->enum('lado_binario', [0, 1])->comment('0 - esquerda 1 - direita');
            $table->string('conta_titular');
            $table->string('avatar');
            $table->string('ip_cadastro');
            $table->datetime('data_qualificacao');
            $table->enum('status', [0, 1])->comment('0 - inativo 1 - ativo')->default(1);
            $table->string('token')->nullable();
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
        Schema::drop('cadastros');
    }
}
