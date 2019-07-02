<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImoveisTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'imoveis';

    /**
     * Run the migrations.
     * @table imoveis
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('tipo_imovel_id');
            $table->unsignedInteger('tipo_edificio_id');
            $table->unsignedInteger('tipo_dominio_id');
            $table->integer('nr_divisoes')->nullable();
            $table->integer('nr_pisos')->nullable();
            $table->string('cor', 45)->nullable();
            $table->float('area_cobertura')->nullable();
            $table->float('area_terreno')->nullable();
            $table->tinyInteger('elevadores')->nullable();
            $table->tinyInteger('sistema_incendio')->nullable();
            $table->integer('ano_construcao')->nullable();
            $table->unsignedInteger('patrimonio_id');

            $table->index(["tipo_dominio_id"], 'fk_imoveis_tipo_dominio1_idx');

            $table->index(["tipo_imovel_id"], 'fk_imoveis_tipo_imovel1_idx');

            $table->index(["tipo_edificio_id"], 'fk_imoveis_tipo_edificio1_idx');

            $table->index(["patrimonio_id"], 'fk_imoveis_patrimonio1_idx');


            $table->foreign('tipo_imovel_id', 'fk_imoveis_tipo_imovel1_idx')
                ->references('id')->on('tipo_imovel')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tipo_edificio_id', 'fk_imoveis_tipo_edificio1_idx')
                ->references('id')->on('tipo_edificio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tipo_dominio_id', 'fk_imoveis_tipo_dominio1_idx')
                ->references('id')->on('tipo_dominio')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('patrimonio_id', 'fk_imoveis_patrimonio1_idx')
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
