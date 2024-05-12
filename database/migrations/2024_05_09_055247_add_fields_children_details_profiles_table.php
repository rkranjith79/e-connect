<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
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
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('children_details', 150);
            $table->json('expectation_jathagam_id')->default(new Expression('(JSON_ARRAY())'))->nullable()->change();
            $table->json('expectation_marital_status_id')->default(new Expression('(JSON_ARRAY())'))->nullable()->change();
            $table->json('expectation_work_place_id')->default(new Expression('(JSON_ARRAY())'))->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            // $table->string('children_details', 150);
        });
    }
};
