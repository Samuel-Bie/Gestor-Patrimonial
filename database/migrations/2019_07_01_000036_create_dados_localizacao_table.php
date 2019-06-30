<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosLocalizacaoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'dados_localizacao';

    /**
     * Run the migrations.
     * @table dados_localizacao
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('ugbs_id');
            $table->unsignedInteger('uges_id');
            $table->unsignedInteger('patrimonio_id');
            $table->unsignedInteger('setores_id')->nullable();
            $table->unsignedInteger('departamentos_id')->nullable();

            $table->index(["ugbs_id"], 'fk_dados_localizacao_ugbs1_idx');

            $table->index(["patrimonio_id"], 'fk_dados_localizacao_patrimonio1_idx');

            $table->index(["setores_id"], 'fk_dados_localizacao_setores1_idx');

            $table->index(["uges_id"], 'fk_dados_localizacao_uges1_idx');

            $table->index(["departamentos_id"], 'fk_dados_localizacao_departamentos1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('ugbs_id', 'fk_dados_localizacao_ugbs1_idx')
                ->references('id')->on('ugbs')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('uges_id', 'fk_dados_localizacao_uges1_idx')
                ->references('id')->on('uges')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('patrimonio_id', 'fk_dados_localizacao_patrimonio1_idx')
                ->references('id')->on('patrimonio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('setores_id', 'fk_dados_localizacao_setores1_idx')
                ->references('id')->on('setores')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('departamentos_id', 'fk_dados_localizacao_departamentos1_idx')
                ->references('id')->on('departamentos')
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
