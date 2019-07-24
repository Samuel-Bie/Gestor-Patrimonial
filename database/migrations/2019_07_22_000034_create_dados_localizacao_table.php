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
            $table->unsignedInteger('patrimonio_id');
            $table->unsignedInteger('setores_id');
            $table->string('destrito')->nullable();
            $table->string('posto_administrativo')->nullable();
            $table->string('localidade')->nullable();
            $table->string('bairro')->nullable();
            $table->string('endereco')->nullable();
            $table->string('classificador_territorial')->nullable();
            $table->string('provincia')->nullable();

            $table->index(["patrimonio_id"], 'fk_dados_localizacao_patrimonio1_idx');

            $table->index(["setores_id"], 'fk_dados_localizacao_setores1_idx');

            $table->unique(["patrimonio_id"], 'patrimonio_id_UNIQUE');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('patrimonio_id', 'fk_dados_localizacao_patrimonio1_idx')
                ->references('id')->on('patrimonio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('setores_id', 'fk_dados_localizacao_setores1_idx')
                ->references('id')->on('setores')
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
