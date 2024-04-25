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
        Schema::create('tdl_tache', function (Blueprint $table) {
            $table->id('id_tache');
            $table->foreignId('nom_users_tache')->constrained('tdl_users');
            $table->string('titre_tache', 30);
            $table->string('description_tache', 150);
            $table->date('ddb_tache');
            $table->date('ddf_tache');
            $table->foreignId('etat_tache')->constrained('tdl_etat_tache');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tdl_tache');
    }
};
