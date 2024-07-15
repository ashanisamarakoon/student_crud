<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key field 'id'
            $table->string('name'); // Creates a string field 'name'
            $table->string('email')->unique(); // Creates a unique string field 'email'
            $table->string('course'); // Creates a string field 'course'
            $table->timestamps(); // Creates 'created_at' and 'updated_at' columns for tracking timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('students'); // Drops the 'students' table if it exists
    }
}
