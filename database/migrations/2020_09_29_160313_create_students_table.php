<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('gradeID');
            $table->string('avatar');
            $table->string('name');
            $table->string('number');
            $table->string('address');
            $table->integer('age');
            $table->string('gender');
            $table->timestamps();

            $table->foreign('gradeID')
                ->references('id')
                ->on('grades');
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
