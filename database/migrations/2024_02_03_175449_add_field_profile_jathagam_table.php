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
        Schema::table('profile_jathagams', function (Blueprint $table) {
            $table->dropColumn('birth_dasa');
            $table->foreignId('birth_dasa_id')->nullable();
            $table->dropColumn('place_to_birth');
            $table->string('place_of_birth');
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
