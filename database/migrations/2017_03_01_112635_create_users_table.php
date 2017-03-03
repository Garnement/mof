<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('firstName', 100);
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->enum('type', ['admin', 'adminR', 'adminD', 'candidate']);
            $table->integer('role_id')->unsigned()->nullable();
            $table->integer('medal_id')->unsigned()->nullable();
            $table->integer('speciality_id')->unsigned()->nullable();
            $table->integer('profile_id')->unsigned()->nullable();
            $table->timestamps();

            #Foreign Key
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
            $table->foreign('medal_id')->references('id')->on('medals')->onDelete('set null');
            $table->foreign('speciality_id')->references('id')->on('specialities')->onDelete('set null');
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
