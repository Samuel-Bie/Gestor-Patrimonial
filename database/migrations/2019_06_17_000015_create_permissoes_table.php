<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissoesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'permissoes';

    /**
     * Run the migrations.
     * @table permissoes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idpermissao');
            $table->unsignedInteger('cargo_idcargo');
            $table->unsignedBigInteger('users_id');
            $table->unsignedInteger('delegacoes_iddelegacao');

            $table->index(["users_id"], 'fk_permissoes_users1_idx');

            $table->index(["delegacoes_iddelegacao"], 'fk_permissoes_delegacoes1_idx');

            $table->index(["cargo_idcargo"], 'fk_permissoes_cargo_idx');


            $table->foreign('cargo_idcargo', 'fk_permissoes_cargo_idx')
                ->references('idcargo')->on('cargo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'fk_permissoes_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('delegacoes_iddelegacao', 'fk_permissoes_delegacoes1_idx')
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
