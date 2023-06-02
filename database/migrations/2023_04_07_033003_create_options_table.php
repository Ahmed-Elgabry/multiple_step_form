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
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->longText('name_center')->nullable();
            $table->longText('city')->nullable();
            $table->longText('district')->nullable();
            $table->longText('location')->nullable();
            $table->longText('gender')->nullable();
            $table->longText('type')->nullable();
            $table->longText('select')->nullable();
            $table->longText('count_home')->nullable();
            $table->longText('select_center')->nullable();
            $table->longText('time_center')->nullable();
            $table->longText('free_center')->nullable();
            $table->longText('price_center')->nullable();
            $table->longText('days_center')->nullable();
            $table->longText('maneger_person')->nullable();
            $table->longText('phone_maneger')->nullable();
            $table->longText('email_maneger')->nullable();
            $table->longText('phone_work')->nullable();
            $table->longText('phone_mony')->nullable();
            $table->longText('about_center')->nullable();
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
        Schema::dropIfExists('options');
    }
};
