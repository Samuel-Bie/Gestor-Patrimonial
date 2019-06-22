<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManuntencaoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'manuntencao';

    /**
     * Run the migrations.
     * @table manuntencao
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('referencia_autorizacao')->nullable()->comment('referencia de autorizacao');
            $table->date('data_autorizacao')->nullable();
            $table->string('entidade_autorizadora')->nullable();
            $table->text('motivo')->nullable();
            $table->string('destino')->nullable();
            $table->string('referencia_entrega')->nullable();
            $table->date('data_entrega')->nullable();
            $table->string('funcionario_receptor')->nullable();
            $table->string('obs', 45)->nullable();
            $table->string('entidate_manuntencao')->nullable();
            $table->integer('periodo_manuntencao')->nullable()->comment('Periodo em dias');
            $table->string('local_manuntencao')->nullable();
            $table->string('obs_manuntencao')->nullable();
            $table->unsignedInteger('patrimonio_id');
            $table->unsignedBigInteger('users_id');

            $table->index(["patrimonio_id"], 'fk_manuntencao_patrimonio1_idx');

            $table->index(["users_id"], 'fk_manuntencao_users1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('patrimonio_id', 'fk_manuntencao_patrimonio1_idx')
                ->references('id')->on('patrimonio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'fk_manuntencao_users1_idx')
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
