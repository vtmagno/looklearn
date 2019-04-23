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
            $table->bigIncrements('id');
            $table->string('accountType');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('name');
            $table->date('birthday');
            $table->string('gender');
            $table->string('location');
            $table->string('occupation');
            $table->string('ratePerHour');
            $table->string('specialization1');
            $table->string('specialization2');
            $table->string('specialization3');
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
        Schema::dropIfExists('users');
    }
}
