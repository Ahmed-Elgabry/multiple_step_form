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
        Schema::create('step_twos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('option_id');
            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');
            $table->longText('fname')->nullable();
            $table->longText('lname')->nullable();
            $table->LongText('freeServeStepTwo')->nullable();
            $table->LongText('paidServeStepTwo')->nullable();
            $table->longText('nationality')->nullable();
            $table->longText('age')->nullable();
            $table->longText('type_msg')->nullable();
            $table->longText('service_msg')->nullable();
            $table->longText('time_work')->nullable();
            $table->longText('days_work')->nullable();
            $table->longText('goto')->nullable();
            $table->string('pic')->nullable();
            $table->longText('experince')->nullable();
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
        Schema::dropIfExists('step_twos');
    }
};
