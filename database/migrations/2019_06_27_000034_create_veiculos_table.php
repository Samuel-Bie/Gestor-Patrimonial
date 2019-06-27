<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'veiculos';

    /**
     * Run the migrations.
     * @table veiculos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('combustivel' )->nullable();
            $table->float('cilindrada')->nullable();
            $table->string('marca' )->nullable();
            $table->string('modelo' )->nullable();
            $table->string('matricula' )->nullable();
            $table->string('nr_motor' )->nullable();
            $table->integer('nr_portas')->nullable();
            $table->string('matricula_nova' )->nullable();
            $table->string('nr_chassis' )->nullable();
            $table->integer('ano_fabrico')->nullable();
            $table->integer('lotacao')->nullable();
            $table->float('tonelagem')->nullable();
            $table->string('cor' )->nullable();
            $table->unsignedInteger('patrimonio_id');

            $table->index(["patrimonio_id"], 'fk_veiculos_patrimonio1_idx');


            $table->foreign('patrimonio_id', 'fk_veiculos_patrimonio1_idx')
                ->references('id')->on('patrimonio')
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
