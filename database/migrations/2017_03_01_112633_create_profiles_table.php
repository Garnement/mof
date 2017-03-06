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
            $table->string('profile_adress');
            $table->string('profile_phone', 100);
            $table->string('profile_birthdate', 30);
            $table->string('profile_city', 100);
            $table->integer('profile_zip_code')->length(5);
            $table->string('profile_file_attach');
            $table->integer('inscription_number')->unsigned();
            $table->enum('profile_statut', ['completed', 'uncompleted'])->default('uncompleted'); //Statut inscription
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
