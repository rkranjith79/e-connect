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
        Schema::create('profile_jathagams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id');
            $table->foreignId('rasi_nakshatra_id')->nullable();
            $table->foreignId('lagnam_id')->nullable();
            $table->foreignId('jathagam_id')->nullable();
            $table->foreignId('nakshatra_patham_id')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->time('time_of_birth')->nullable();
            $table->string('place_to_birth', 200)->nullable();
            $table->string('birth_dasa', 200)->nullable();
            $table->integer('birth_dasa_remaining_year')->nullable();
            $table->integer('birth_dasa_remaining_month')->nullable();
            $table->integer('birth_dasa_remaining_day')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_jathagams');
    }
};
