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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('email', 100);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('gender_id');
            $table->foreignId('marital_status_id')->nullable();
            $table->foreignId('registered_by_id')->nullable();
            $table->foreignId('physical_status_id')->nullable();
            $table->foreignId('height_id')->nullable();
            $table->foreignId('weight_id')->nullable();
            $table->foreignId('body_type_id')->nullable();
            $table->foreignId('color_id')->nullable();
            $table->foreignId('blood_group_id')->nullable();
            $table->boolean('active')->default(1);
            $table->timestamps();
            $table->string('language_tamil');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
