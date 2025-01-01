<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('movie_actor', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Movie::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Actor::class)->constrained()->cascadeOnDelete();
            $table->string('character')->nullable();
            $table->integer('cast_id')->nullable();
            $table->integer('order')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movie_actor');
    }
};
