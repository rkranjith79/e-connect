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
        Schema::create('purchased_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id');
            $table->foreignId('purchased_profile_id');
            $table->foreignId('plan_id');
            $table->foreignId('order_id');
            $table->foreignId('order_token');
            $table->dateTime('expired_at', precision: 0)->nullable();
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
        Schema::dropIfExists('purchased_profiles');
    }
};
