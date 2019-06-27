<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacaoAdicionalTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'informacao_adicional';

    /**
     * Run the migrations.
     * @table informacao_adicional
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('fornecedor');
            $table->string('nuit' )->nullable();
            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('tipo_comprovativo')->nullable();
            $table->string('nr_comprovativo')->nullable();
            $table->tinyInteger('assistencia_tecnica')->nullable()->comment('Sim ou nao');
            $table->integer('garantia')->nullable()->comment('Meses');
            $table->string('utilizador')->nullable()->comment('Utilizador do bem (Ex: nome do funcionarioo)');
            $table->text('obs')->nullable();
            $table->unsignedInteger('patrimonio_id');
            $table->tinyInteger('seguro')->nullable();
            $table->tinyInteger('ferramentas')->nullable();
            $table->tinyInteger('extintor')->nullable();

            $table->index(["patrimonio_id"], 'fk_informacao_adicional_patrimonio1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('patrimonio_id', 'fk_informacao_adicional_patrimonio1_idx')
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
