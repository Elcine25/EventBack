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
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('nom');
            $table->string('description');
            $table->time('heure');
            $table->string('lieu');
            $table->foreignId('villes_id')->references('id')->on('villes')->onDelete('cascade');
            $table->foreignId('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $chema::table("evenements", function(Blueprint $table) {
            $table->dropConstrainedForeignId("categories_Id");
        });
        Schema::dropIfExists('evenements');
    }
};
