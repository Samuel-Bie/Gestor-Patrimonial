<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosAbateTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'dados_abate';

    /**
     * Run the migrations.
     * @table dados_abate
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('nr_auto_ver_incap');
            $table->date('data_despacho')->nullable()->comment('Data de despacho do numero de auto');
            $table->string('entidade_autorizadora')->nullable();
            $table->float('valor_atual')->nullable();
            $table->text('motivo')->nullable();
            $table->string('destino')->nullable();
            $table->string('ref_entrega' )->nullable();
            $table->string('data_entrega' )->nullable();
            $table->string('obs' )->nullable();
            $table->unsignedInteger('patrimonio_id');
            $table->unsignedBigInteger('users_id');

            $table->index(["users_id"], 'fk_dados_abate_users1_idx');

            $table->index(["patrimonio_id"], 'fk_dados_abate_patrimonio1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('patrimonio_id', 'fk_dados_abate_patrimonio1_idx')
                ->references('id')->on('patrimonio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'fk_dados_abate_users1_idx')
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
