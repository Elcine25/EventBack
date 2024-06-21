<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mail_subscrips', function (Blueprint $table) {
            $table->id();
            $table->boolean('subscribe')->default(0);
            $table->unsignedBigInteger('evenements_id');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('categories_id');
            $table->foreign('evenements_id')->references('id')->on('evenements');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mail_subscrips');
    }
};
