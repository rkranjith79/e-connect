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
        Schema::create('purchased_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id');
            $table->foreignId('plan_id');
            $table->integer('used_profile_count');
            $table->json('order');
            $table->dateTime('expired_at', precision: 0)->nullable();
            $table->boolean('active')->default(1);
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
        //
    }
};
