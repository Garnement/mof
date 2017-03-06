<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_user', function (Blueprint $table) {
          $table->integer('user_id')->unsigned()->nullable();
          $table->integer('certificate_id')->unsigned()->nullable();

          #Foreign Key
          $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
          $table->foreign('certificate_id')->references('id')->on('certificates')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificate_user');
    }
}
