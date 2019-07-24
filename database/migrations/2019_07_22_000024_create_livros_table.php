<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'livros';

    /**
     * Run the migrations.
     * @table livros
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('titulo');
            $table->string('assunto')->nullable();
            $table->integer('edicao')->nullable();
            $table->integer('paginas')->nullable();
            $table->integer('volumes')->nullable();
            $table->text('autor')->nullable();
            $table->text('editora')->nullable();
            $table->unsignedInteger('patrimonio_id');
            $table->string('local_edicao')->nullable();
            $table->string('tipo_obra')->nullable();
            $table->integer('ano_edicao')->nullable();

            $table->index(["patrimonio_id"], 'fk_livros_patrimonio1_idx');


            $table->foreign('patrimonio_id', 'fk_livros_patrimonio1_idx')
                ->references('id')->on('patrimonio')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
