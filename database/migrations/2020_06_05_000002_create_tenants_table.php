<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    public $tableName = 'tenants';

    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45)->nullable();
            $table->string('db_connection', 45)->nullable();
            $table->string('db_name', 45)->nullable();
            $table->string('db_host', 255)->nullable();
            $table->string('db_password', 255)->nullable();
            $table->string('db_port', 5)->nullable();
            $table->nullableTimestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
