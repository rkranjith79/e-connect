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
        Schema::table('castes', function (Blueprint $table) {
            $table->foreignId('religion_id');
        });
        Schema::table('sub_castes', function (Blueprint $table) {
            $table->foreignId('caste_id');
        });
        Schema::table('states', function (Blueprint $table) {
            $table->foreignId('country_id');
        });
        Schema::table('districts', function (Blueprint $table) {
            $table->foreignId('state_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('castes', function (Blueprint $table) {
            $table->dropColumn('religion_id');
        });
        Schema::table('sub_castes', function (Blueprint $table) {
            $table->dropColumn('caste_id');
        });
        Schema::table('states', function (Blueprint $table) {
            $table->dropColumn('country_id');
        });
        Schema::table('districts', function (Blueprint $table) {
            $table->dropColumn('state_id');
        });
    }
};
