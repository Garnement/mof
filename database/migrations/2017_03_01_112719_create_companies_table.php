<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function(Blueprint $table){
            $table->increments('id');
            $table->string('company_name', 100);
            $table->string('address');
            $table->string('city', 100);
            $table->integer('zip_code')->length(5);
            $table->string('phone', 30);
            $table->string('email', 100);
            $table->string('manager_lastName', 50);
            $table->string('manager_firstName', 50);
            $table->integer('department')->length(3);
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
        Schema::dropIfExists('companies');
    }
}
