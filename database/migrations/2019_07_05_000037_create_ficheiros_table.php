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
            $table->unsignedInteger('dados_abate_id')->nullable();
            $table->unsignedInteger('dados_transferencia_id')->nullable();
            $table->unsignedInteger('movimentacoes_id')->nullable();
            $table->unsignedInteger('manuntencao_id')->nullable();

            $table->index(["manuntencao_id"], 'fk_ficheiros_manuntencao1_idx');

            $table->index(["patrimonio_id"], 'fk_ficheiros_patrimonio1_idx');

            $table->index(["movimentacoes_id"], 'fk_ficheiros_movimentacoes1_idx');

            $table->index(["dados_transferencia_id"], 'fk_ficheiros_dados_transferencia1_idx');

            $table->index(["dados_abate_id"], 'fk_ficheiros_dados_abate1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('patrimonio_id', 'fk_ficheiros_patrimonio1_idx')
                ->references('id')->on('patrimonio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('dados_abate_id', 'fk_ficheiros_dados_abate1_idx')
                ->references('id')->on('dados_abate')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('dados_transferencia_id', 'fk_ficheiros_dados_transferencia1_idx')
                ->references('id')->on('dados_transferencia')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('movimentacoes_id', 'fk_ficheiros_movimentacoes1_idx')
                ->references('id')->on('movimentacoes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('manuntencao_id', 'fk_ficheiros_manuntencao1_idx')
                ->references('id')->on('manuntencao')
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
