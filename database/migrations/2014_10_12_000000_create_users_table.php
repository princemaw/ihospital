<?php

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
            $table->increments('userId');
            $table->string('username');
            $table->string('password', 60);
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->enum('sex', ['  M', 'F']);
            $table->string('dateOfBirth');
            $table->enum('userType', ['patient', 'doctor', 'staff', 'nurse', 'pharmacist', 'admin']);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
