<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferenciaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'transferencia';

    /**
     * Run the migrations.
     * @table transferencia
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('referencia_autorizacao')->nullable()->comment('referencia de autorizacao');
            $table->dateTime('data_autorizacao')->nullable();
            $table->string('entidade_autorizadora')->nullable();
            $table->longText('motivo')->nullable();
            $table->string('destino')->nullable();
            $table->float('valor_atual')->nullable();
            $table->float('custo_transferencia')->nullable();
            $table->string('ref_entrega')->nullable();
            $table->date('data_entrega')->nullable();
            $table->string('funcionario_receptor')->nullable();
            $table->longText('obs')->nullable();
            $table->unsignedInteger('patrimonio_id');
            $table->unsignedBigInteger('users_id');

            $table->index(["users_id"], 'fk_dados_transferencia_users1_idx');

            $table->index(["patrimonio_id"], 'fk_dados_transferencia_patrimonio1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('patrimonio_id', 'fk_dados_transferencia_patrimonio1_idx')
                ->references('id')->on('patrimonio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'fk_dados_transferencia_users1_idx')
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
