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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedTinyInteger('general_discipline')->nullable();
            $table->unsignedTinyInteger('work_skills')->nullable();
            $table->unsignedTinyInteger('initiative')->nullable();
            $table->unsignedTinyInteger('imagination')->nullable();
            $table->unsignedTinyInteger('knowledge')->nullable();
            $table->float('final_mark')->nullable();
            $table->foreign('employee_id')
                ->references('id')
                ->on('employees')
                ->where('manager_validation', 1)
                ->onDelete('cascade');
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
        Schema::dropIfExists('ratings');
    }
};
