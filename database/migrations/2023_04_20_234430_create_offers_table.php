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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('manager_id');
            $table->string('manager_name');
            $table->string('message',500);
            $table->string('company_name');
            $table->string('post');
            $table->string('period');
            $table->date('dateS');
            $table->date('dateE');
            $table->string('phone_num');
            $table->string('address');
            $table->string('logo')->nullable();
            $table->timestamps();
            $table->foreign('manager_id')->references('id')->on('users')->where('type',2)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
