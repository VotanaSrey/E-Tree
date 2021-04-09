<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('email',150);
            $table->unique('email');
            $table->string('firstname', 30);
            $table->string('lastname', 30);
            $table->string('image', 300)->default('/images/users/defult_profile.png');
            $table->date('dob')->nullable();
            $table->char('gender', 6)->nullable();
            $table->string('password', 450);
            $table->text('address')->nullable();
            $table->string('city', 45)->nullable();
            $table->string('country',45)->nullable();
            $table->string('zip_code');
            $table->bigInteger('phone')->nullable();
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
