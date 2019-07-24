<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUgbsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ugbs';

    /**
     * Run the migrations.
     * @table ugbs
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
            $table->string('codigo', 45)->nullable();
            $table->unsignedInteger('uges_id');

            $table->index(["uges_id"], 'fk_ugbs_uges1_idx');

            $table->unique(["codigo"], 'codigo_UNIQUE');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('uges_id', 'fk_ugbs_uges1_idx')
                ->references('id')->on('uges')
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
