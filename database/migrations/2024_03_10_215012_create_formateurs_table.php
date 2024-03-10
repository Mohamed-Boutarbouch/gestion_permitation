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
        Schema::create('formateurs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('matricule')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('grade');
            $table->date('date_naissance');
            $table->date('date_recrutement');
            $table->string('poste');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('matier_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('etablissement_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formateurs');
    }
};
