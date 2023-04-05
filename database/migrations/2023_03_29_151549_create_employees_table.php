<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stud_id');
            $table->string('name');
            $table->string('last_name');
            $table->string('email');
            $table->unsignedTinyInteger('accepted')->default(0);
            $table->date('birth');
            $table->date('dateS');
            $table->date('dateE');
            //$table->string('file_path');
            $table->string('post');
            $table->string('Speciality');
            $table->string('education');
            $table->string('College_year');
            $table->timestamps();
           $table->foreign('stud_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');

    }
};
