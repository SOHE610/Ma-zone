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
        Schema::create('signalements', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->foreignId('categorie_id')->constrained('categories');
            $table->foreignId('utilisateur_id')->constrained('utilisateurs');
            $table->foreignId('quartier_id')->constrained('quartiers');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->string('photo')->nullable();
            $table->enum('statut', ['en_attente', 'en_cours', 'resolu', 'rejeté'])->default('en_attente');
            $table->timestamp('date_signalement')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signalements');
    }
};
