<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->boolean('adult')->default(false);
            $table->string('backdrop_path')->nullable();
            $table->string('original_language');
            $table->string('original_title');
            $table->text('overview')->nullable();
            $table->float('popularity')->default(0);
            $table->string('poster_path')->nullable();
            $table->date('release_date')->nullable();
            $table->string('title');
            $table->boolean('video')->default(false);
            $table->float('vote_average')->default(0);
            $table->integer('vote_count')->default(0);
            $table->timestamps();
        });

        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('genre_movie', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Movie::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Genre::class)->constrained()->cascadeOnDelete();
            $table->primary(['movie_id', 'genre_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('genre_movie');
        Schema::dropIfExists('genres');
    }
};
