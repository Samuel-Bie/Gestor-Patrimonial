<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDelegacoesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'delegacoes';

    /**
     * Run the migrations.
     * @table delegacoes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('iddelegacao');
            $table->string('nome')->nullable();
            $table->unsignedInteger('universidade_iduniversidade');

            $table->index(["universidade_iduniversidade"], 'fk_delegacoes_universidade1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('universidade_iduniversidade', 'fk_delegacoes_universidade1_idx')
                ->references('iduniversidade')->on('universidade')
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
