<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_master', function(Blueprint $table){
            $table->integer('candidate_id')->unsigned();
            $table->integer('master_id')->unsigned();

            #Foreign Key 
            $table->foreign('candidate_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('master_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_master');
    }
}
