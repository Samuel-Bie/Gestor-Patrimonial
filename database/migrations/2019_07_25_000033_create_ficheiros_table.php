<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFicheirosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ficheiros';

    /**
     * Run the migrations.
     * @table ficheiros
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('path')->nullable();
            $table->unsignedInteger('patrimonio_id')->nullable();
            $table->unsignedInteger('abate_id')->nullable();
            $table->unsignedInteger('transferencia_id')->nullable();
            $table->unsignedInteger('movimentacoes_id')->nullable();
            $table->unsignedInteger('manutencao_id')->nullable();

            $table->index(["patrimonio_id"], 'fk_ficheiros_patrimonio1_idx');

            $table->index(["movimentacoes_id"], 'fk_ficheiros_movimentacoes1_idx');

            $table->index(["abate_id"], 'fk_ficheiros_abate1_idx');

            $table->index(["transferencia_id"], 'fk_ficheiros_transferencia1_idx');

            $table->index(["manutencao_id"], 'fk_ficheiros_manutencao1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('patrimonio_id', 'fk_ficheiros_patrimonio1_idx')
                ->references('id')->on('patrimonio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('abate_id', 'fk_ficheiros_abate1_idx')
                ->references('id')->on('abate')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('transferencia_id', 'fk_ficheiros_transferencia1_idx')
                ->references('id')->on('transferencia')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('movimentacoes_id', 'fk_ficheiros_movimentacoes1_idx')
                ->references('id')->on('movimentacoes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('manutencao_id', 'fk_ficheiros_manutencao1_idx')
                ->references('id')->on('manutencao')
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
