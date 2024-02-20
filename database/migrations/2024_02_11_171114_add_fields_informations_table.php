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
        Schema::table('informations', function (Blueprint $table) {
            $table->string('code', 255)->nullable();
            $table->longText('content')->nullable();
        });

        Schema::table('site_configurations', function (Blueprint $table) {
            $table->string('code', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
