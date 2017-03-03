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
            $table->string('address');
            $table->string('city', 100);
            $table->integer('zip_code')->length(5)->unsigned();
            $table->string('phone', 30);
            $table->string('email');
            $table->string('manager_lastName', 50);
            $table->string('manager_firstName', 50);
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

