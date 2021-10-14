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
            $table->string('name');
            $table->string('email')->unique();
            $table->unsignedBigInteger('role_id')->default(2);
            $table->unsignedBigInteger('gender_id');
            $table->text('address');
            $table->string('password');

            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete(('cascade'));
            $table->foreign('gender_id')->references('id')->on('genders')->onUpdate('cascade')->onDelete(('cascade'));

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
