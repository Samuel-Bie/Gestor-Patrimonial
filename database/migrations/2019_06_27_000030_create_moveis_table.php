<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoveisTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'moveis';

    /**
     * Run the migrations.
     * @table moveis
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('marca')->nullable();
            $table->string('nr_serie')->nullable();
            $table->string('modelo')->nullable();
            $table->float('comprimento')->nullable()->comment('Comprimento em metros');
            $table->float('largura')->nullable();
            $table->string('cor' )->nullable();
            $table->string('material')->nullable()->comment('Material predominante no bem');
            $table->unsignedInteger('patrimonio_id');

            $table->index(["patrimonio_id"], 'fk_moveis_patrimonio1_idx');


            $table->foreign('patrimonio_id', 'fk_moveis_patrimonio1_idx')
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
