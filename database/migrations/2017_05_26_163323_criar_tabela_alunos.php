<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAlunos extends Migration
{
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('nome', 80);
            $table->string('email', 80);
            $table->integer('registro');
            $table->string('senha', 80);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aluno');
    }
}