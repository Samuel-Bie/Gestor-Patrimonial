<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetoresTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'setores';

    /**
     * Run the migrations.
     * @table setores
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idsetor');
            $table->string('nome')->nullable();
            $table->unsignedInteger('delegacoes_iddelegacao');

            $table->index(["delegacoes_iddelegacao"], 'fk_setores_delegacoes1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('delegacoes_iddelegacao', 'fk_setores_delegacoes1_idx')
                ->references('iddelegacao')->on('delegacoes')
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
