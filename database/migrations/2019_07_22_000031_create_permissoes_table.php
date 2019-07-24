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
            $table->increments('id');
            $table->unsignedInteger('cargo_id');
            $table->unsignedBigInteger('users_id');
            $table->unsignedInteger('ugbs_id');

            $table->index(["users_id"], 'fk_permissoes_users1_idx');

            $table->index(["ugbs_id"], 'fk_permissoes_ugbs1_idx');

            $table->index(["cargo_id"], 'fk_permissoes_cargo_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('ugbs_id', 'fk_permissoes_ugbs1_idx')
                ->references('id')->on('ugbs')
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
