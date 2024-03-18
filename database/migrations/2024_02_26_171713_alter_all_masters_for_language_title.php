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
        Schema::table('assets_values', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('birth_dasas', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('blood_groups', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('body_types', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('castes', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('colors', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('countries', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('districts', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('educations', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('expectations', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('genders', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('heights', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('informations', function (Blueprint $table) {
            $table->string('language_tamil')->nullable();
        });
        Schema::table('jathagams', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('lagnams', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('marital_statuses', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('nakshatra_pathams', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('navamsams', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('parent_statuses', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('physical_statuses', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('rasis', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('rasi_nakshatras', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('rasi_navamsams', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('registered_bies', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('religions', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('social_types', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('states', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('sub_castes', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('weights', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('works', function (Blueprint $table) {
            $table->string('language_tamil');
        });
        Schema::table('work_places', function (Blueprint $table) {
            $table->string('language_tamil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assets_values', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('birth_dasas', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('blood_groups', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('body_types', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('castes', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('colors', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('countries', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('districts', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('educations', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('expectations', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('genders', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('heights', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('informations', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('jathagams', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('lagnams', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('marital_statuses', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('nakshatra_pathams', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('navamsams', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('parent_statuses', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('physical_statuses', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('rasis', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('rasi_nakshatras', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('rasi_navamsams', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('registered_bies', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('religions', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('social_types', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('states', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('sub_castes', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('weights', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('works', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
        Schema::table('work_places', function (Blueprint $table) {
            $table->dropColumn('language_tamil');
        });
    }
};
