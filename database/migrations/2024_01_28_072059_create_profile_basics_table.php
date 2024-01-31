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
        Schema::create('profile_basics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id');
            $table->string('temple',100)->nullable();
            $table->foreignId('caste_id')->nullable();
            $table->foreignId('sub_caste_id')->nullable();
            $table->foreignId('degree_id')->nullable();
            $table->string('education_details',100);
            $table->foreignId('work_id')->nullable();
            $table->string('work_details',100)->nullable();
            $table->string('monthly_income',100)->nullable();
            $table->string('phone',100)->nullable();
            $table->string('whatsapp',100)->nullable();
            $table->text('address')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->foreignId('state_id')->nullable();
            $table->foreignId('district_id')->nullable();
            $table->string('country_others',100)->nullable();
            $table->string('state_others',100)->nullable();
            $table->string('district_others',100)->nullable();
            $table->foreignId('father_status_id')->nullable();
            $table->foreignId('mother_status_id')->nullable();
            $table->foreignId('social_type_id')->nullable();
            $table->string('father_name',100)->nullable();
            $table->string('mother_name',100)->nullable();
            $table->string('native',100)->nullable();
            $table->string('siblings',100)->nullable();
            $table->foreignId('asset_value_id')->nullable();
            $table->text('asset_details')->nullable();
            $table->text('seimurai')->nullable();
            $table->foreignId('expectation_jathagam_id')->nullable();
            $table->foreignId('expectation_marital_status_id')->nullable();
            $table->foreignId('expectation_work_place_id')->nullable();
            $table->text('expectation_nakshatra')->nullable();
            $table->text('expectation')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('profile_basics');
    }
};
