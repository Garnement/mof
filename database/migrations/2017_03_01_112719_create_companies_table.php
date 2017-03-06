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
            $table->string('company_address');
            $table->string('company_city', 100);
            $table->integer('company_zip_code')->length(5);
            $table->string('company_phone', 30);
            $table->string('company_email', 100);
            $table->string('company_manager_lastName', 50);
            $table->string('company_manager_firstName', 50);
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
