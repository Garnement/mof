<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function(Blueprint $table){
            $table->increments('id');
            $table->string('adress');
            $table->string('phone', 100);
            $table->string('birthdate', 30);
            $table->string('city', 100);
            $table->integer('zip_code')->length(5);
            $table->string('file_attach');
            $table->integer('inscription_number')->unsigned();
            $table->enum('statut', ['completed', 'uncompleted'])->default('uncompleted'); //Statut inscription
            $table->enum('gender', ['mr', 'mme']);
            $table->boolean('apprenticeship');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
