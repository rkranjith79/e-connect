<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->json('expectation_jathagam_id')->default(new Expression('(JSON_ARRAY())'));
            $table->json('expectation_marital_status_id')->default(new Expression('(JSON_ARRAY())'));
            $table->json('expectation_work_place_id')->default(new Expression('(JSON_ARRAY())'));
            $table->text('expectation_nakshatra')->nullable();
            $table->text('expectation')->nullable();

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
