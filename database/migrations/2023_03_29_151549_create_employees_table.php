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
                $table->unsignedTinyInteger('manager_validation')->default(0);
    //0=not consulted , 1=accepted , 2=refused
                $table->date('dateS');
                $table->date('dateE');
                //$table->string('file_path');
                $table->string('post');
                $table->string('card_num');
                $table->string('social_num');
                $table->string('nameComp');
                $table->string('Speciality');
                $table->string('education');
                $table->string('College_year');
                $table->string('manager_email');
                $table->boolean('rated')->default(0);
                $table->boolean('i')->default(0);
                $table->text('refusal_reason')->nullable();
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
