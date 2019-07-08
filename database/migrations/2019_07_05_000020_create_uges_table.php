<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUgesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'uges';

    /**
     * Run the migrations.
     * @table uges
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('designacao')->nullable();
            $table->string('provincia')->nullable();
            $table->string('destrito')->nullable();
            $table->string('posto_administrativo')->nullable();
            $table->string('localidade')->nullable();
            $table->string('bairro')->nullable();
            $table->string('endereco')->nullable();
            $table->string('classificador_territorial')->nullable();
            $table->unsignedInteger('universidade_id');
            $table->string('codigo', 45)->nullable();

            $table->index(["universidade_id"], 'fk_uges_universidade1_idx');

            $table->unique(["codigo"], 'codigo_UNIQUE');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('universidade_id', 'fk_uges_universidade1_idx')
                ->references('id')->on('universidade')
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
