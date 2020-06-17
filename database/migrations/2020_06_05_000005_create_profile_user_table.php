<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileUserTable extends Migration
{
    public $tableName = 'profile_user';

    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('user_id');
            $table->integer('tenant_id');
            $table->integer('profile_id')->nullable();

            $table->index(["tenant_id"], 'fk_users_has_profiles_tenants1_idx');

            $table->index(["profile_id"], 'fk_users_has_profiles_profiles1_idx');

            $table->index(["user_id"], 'fk_users_has_profiles_users_idx');


            $table->foreign('user_id', 'fk_users_has_profiles_users_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('profile_id', 'fk_users_has_profiles_profiles1_idx')
                ->references('id')->on('profiles')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tenant_id', 'fk_users_has_profiles_tenants1_idx')
                ->references('id')->on('tenants')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
