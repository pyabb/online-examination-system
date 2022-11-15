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
            $table->string('uuid', 36)->unique();
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('email')->unique();
            $table->string('country', 50);
            $table->string('state', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('documentType', 15);
            $table->string('document', 15)->unique();
            $table->string('phone')->nullable();
            $table->string('address1', 255)->default('Undefined');
            $table->string('address2', 255)->nullable()->default('Undefined');
            $table->string('aboutHimself', 255)->default('user does not set description about himself');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
