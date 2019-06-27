<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelInfoAddicionalTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'imovel_info_addicional';

    /**
     * Run the migrations.
     * @table imovel_info_addicional
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('conservatoria_registro_predial' )->nullable();
            $table->string('nr_registro_predial' )->nullable();
            $table->string('folhas_registro_predial' )->nullable();
            $table->string('livro_registro_predial' )->nullable();
            $table->integer('ano_registro')->nullable();
            $table->string('direcao_area_fiscal' )->nullable();
            $table->string('nr_matriz_predial' )->nullable();
            $table->string('folhas_matriz_predial' )->nullable();
            $table->string('ano_matriz_predial' )->nullable();
            $table->string('livro_matriz_predial' )->nullable();
            $table->unsignedInteger('patrimonio_id');

            $table->index(["patrimonio_id"], 'fk_imovel_info_addicional_patrimonio1_idx');


            $table->foreign('patrimonio_id', 'fk_imovel_info_addicional_patrimonio1_idx')
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
