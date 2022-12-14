<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36)->unique();
            $table->string('course', 255);
            $table->string('theme', 255);
            $table->string('description', 255)->nullable();
            $table->timestamp('init_date');
            $table->timestamp('end_date')->nullable();
            $table->integer('time');
            $table->enum('status', ['progress', 'pending', 'finish'])->default('pending');
            $table->mediumInteger('questions');
            $table->decimal('score', '6', '3');
            $table->integer('adminId');
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
        Schema::dropIfExists('exam');
    }
}
