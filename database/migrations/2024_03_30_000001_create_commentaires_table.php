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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->unsignedBigInteger('evenements_id');
            $table->unsignedBigInteger('users_id');
            $table->foreign('evenements_id')->references('id')->on('evenements');
            $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("commentaires", function(Blueprint $table) {
            $table->dropConstrainedForeignId("evenements_Id");
        });
        Schema::dropIfExists('commentaires');
    }
};
