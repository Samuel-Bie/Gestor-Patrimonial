<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatrimonioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'patrimonio';

    /**
     * Run the migrations.
     * @table patrimonio
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('nip')->nullable();
            $table->unsignedInteger('classificador_geral_id');
            $table->unsignedInteger('formas_aquisicao_id');
            $table->unsignedInteger('estado_aquisicao_bem_id');
            $table->unsignedInteger('estado_conservacao_bem_id');
            $table->date('data_aquisicao')->nullable();
            $table->float('valor_aquisicao')->nullable();
            $table->unsignedBigInteger('users_id')->comment('Usuario que regista');

            $table->index(["classificador_geral_id"], 'fk_patrimonio_classificador_geral1_idx');

            $table->index(["users_id"], 'fk_patrimonio_users1_idx');

            $table->index(["formas_aquisicao_id"], 'fk_patrimonio_formas_aquisicao1_idx');

            $table->index(["estado_conservacao_bem_id"], 'fk_patrimonio_estado_bem1_idx');

            $table->index(["estado_aquisicao_bem_id"], 'fk_patrimonio_estado_bem2_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('classificador_geral_id', 'fk_patrimonio_classificador_geral1_idx')
                ->references('id')->on('classificador_geral')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('formas_aquisicao_id', 'fk_patrimonio_formas_aquisicao1_idx')
                ->references('id')->on('formas_aquisicao')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('estado_conservacao_bem_id', 'fk_patrimonio_estado_bem1_idx')
                ->references('id')->on('estado_bem')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('estado_aquisicao_bem_id', 'fk_patrimonio_estado_bem2_idx')
                ->references('id')->on('estado_bem')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'fk_patrimonio_users1_idx')
                ->references('id')->on('users')
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
