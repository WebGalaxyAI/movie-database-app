<?php

namespace App\Console\Commands;

use App\Models\Genre;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ImportGenres extends Command
{
    /**
     * Назва та опис команди.
     */
    protected $signature = 'genres:import';
    protected $description = 'Import genres from TMDB API';

    /**
     * Виконання команди.
     */
    public function handle()
    {
        $apiKey = config('services.tmdb.api_key');
        $apiUrl = 'https://api.themoviedb.org/3/genre/movie/list';

        $this->info('Fetching genres from TMDB API...');

        $response = Http::get($apiUrl, [
            'api_key' => $apiKey,
            'language' => 'en-US',
        ]);

        if ($response->failed()) {
            $this->error('Failed to fetch genres from TMDB API.');
            return Command::FAILURE;
        }

        $genres = $response->json('genres');

        if (empty($genres)) {
            $this->info('No genres found.');
            return Command::SUCCESS;
        }

        $this->info('Fetched ' . count($genres) . ' genres.');

        foreach ($genres as $genre) {
            Genre::updateOrCreate(
                ['id' => $genre['id']],
                ['name' => $genre['name']]
            );

            $this->info("Imported genre: {$genre['name']}");
        }

        $this->info('Genres imported successfully!');
        return Command::SUCCESS;
    }
}
