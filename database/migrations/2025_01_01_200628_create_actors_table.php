<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('biography')->nullable();
            $table->string('birthday')->nullable();
            $table->string('deathday')->nullable();
            $table->integer('gender');
            $table->string('place_of_birth')->nullable();
            $table->string('imdb_id')->nullable();
            $table->string('known_for_department')->nullable();
            $table->float('popularity')->default(0);
            $table->string('profile_path')->nullable();
            $table->json('also_known_as')->nullable();
            $table->string('homepage')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('actors');
    }
};
