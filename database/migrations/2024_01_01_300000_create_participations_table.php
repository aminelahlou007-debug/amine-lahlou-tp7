<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('films_id');
            $table->unsignedBigInteger('acteur_id');
            $table->string('role');
            $table->unique(['acteur_id', 'films_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('participations');
    }
};
