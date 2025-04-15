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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            // ID du citoyen (utile si on veut suivre ses signalements, sinon nullable)
            $table->string('type'); 
           // Type du problème : "éclairage", "route", etc.
           $table->text('description'); 
           // Description du problème
           $table->string('image_path')->nullable(); 
           // Photo du problème (optionnel)
           $table->decimal('latitude', 10, 8); 
           $table->decimal('longitude', 11, 8); 
           // Coordonnées GPS récupérées depuis le mobile automatiquement
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
