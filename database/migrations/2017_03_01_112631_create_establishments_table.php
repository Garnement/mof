<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablishmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishments', function(Blueprint $table){
            $table->increments('id');
            $table->string('establishment_name', 100);
            $table->string('establishment_address');
            $table->string('establishment_city', 100);
            $table->integer('establishment_zip_code')->length(5)->unsigned();
            $table->string('establishment_phone', 30);
            $table->string('establishment_email');
            $table->string('establishment_manager_lastName', 50);
            $table->string('establishment_manager_firstName', 50);
            $table->integer('department_id')->unsigned()->nullable();
            $table->timestamps();
            
            #Foreign Key 
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establishments');
    }
}

