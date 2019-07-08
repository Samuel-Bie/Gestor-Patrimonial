<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassificadorGeralTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'classificador_geral';

    /**
     * Run the migrations.
     * @table classificador_geral
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('codigo');
            $table->text('designacao');

            $table->unique(["codigo"], 'codigo_UNIQUE');
            $table->softDeletes();
            $table->nullableTimestamps();
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
