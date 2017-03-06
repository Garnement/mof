<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablishmentUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishment_user', function(Blueprint $table){
            $table->integer('establishment_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();

            #Foreign Key 
            $table->foreign('establishment_id')->references('id')->on('establishments')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establishment_user');
    }
}
