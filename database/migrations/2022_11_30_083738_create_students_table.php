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

            $table->string('name');
            $table->string('phone');
            $table->string('address');
            

            $table->string('rel_name');
            $table->string('rel_phone');
            $table->string('rel_address');
            $table->integer('rel_id');

            $table->integer('college_id');
            $table->string('college_Department');
            $table->string('level');
            $table->string('StudentID');
            
            $table->string('room_no');
            $table->integer('section_id');
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
