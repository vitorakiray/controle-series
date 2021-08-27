<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaEpisodio extends Migration
{
    public function up() {
        Schema::create('episodios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->date('data');
            $table->float('avaliacao');
            $table->string('comentario');
            $table->integer('serie_id');
            $table->foreign('serie_id')
            ->references('id')
            ->on('series')
            ->onDelete('cascade');
        }); 
    }

    public function down() {
        Schema::drop('episodios');

    }
}
