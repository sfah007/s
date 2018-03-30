<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('course_name');
            $table->string('batch_name');
            $table->integer('registration');
            $table->string('contact')->nullable();
            $table->string('guardian_contact');
            $table->string('waiver_reference')->nullable();
            $table->integer('waiver_amount');
            $table->integer('paid_amount');
            $table->string('school');
            $table->string('college')->nullable();
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
        Schema::dropIfExists('students');
    }
}
