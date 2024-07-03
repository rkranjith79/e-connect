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
        Schema::table('profile_basics', function (Blueprint $table) {
            $table->dropColumn('degree_id');

            $table->dropColumn('expectation_jathagam_id');
            $table->dropColumn('expectation_marital_status_id');
            $table->dropColumn('expectation_work_place_id');
            $table->dropColumn('expectation_nakshatra');
            $table->dropColumn('expectation');

            $table->foreignId('education_id')->nullable();
            $table->foreignId('work_place_id')->nullable();
            $table->string('father_occupation', 255)->nullable();
            $table->string('mother_occupation', 255)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
