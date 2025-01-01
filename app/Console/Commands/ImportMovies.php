<?php

namespace App\Console\Commands;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ImportMovies extends Command
{
    /**
     * Назва та опис команди.
     */
    protected $signature = 'movies:import';
    protected $description = 'Import movies from TMDB API with pagination and progress bar';

    /**
     * Виконання команди.
     */
    public function handle()
    {
        $apiKey = config('services.tmdb.api_key');
        $apiUrl = 'https://api.themoviedb.org/3/movie/popular';

        $this->info('Fetching total number of pages from TMDB API...');

        $response = Http::get($apiUrl, [
            'api_key' => $apiKey,
        ]);

        if ($response->failed()) {
            $this->error('Failed to fetch data from TMDB API.');
            return Command::FAILURE;
        }

        $data = $response->json();
        $totalPages = $data['total_pages'] ?? 0;

        if ($totalPages === 0) {
            $this->error('No pages found to process.');
            return Command::FAILURE;
        }

        $this->info("Found {$totalPages} pages to process.");

        $progressBar = $this->output->createProgressBar($totalPages);
        $progressBar->start();

        for ($page = 1; $page <= $totalPages; $page++) {
            $progressBar->advance();
            $response = Http::get($apiUrl, [
                'api_key' => $apiKey,
                'page' => $page,
            ]);

            if ($response->failed()) {
                $this->error("Failed to fetch data from TMDB API on page {$page}.");
                continue;
            }

            $movies = $response->json('results') ?? [];

            foreach ($movies as $movie) {
                $newMovie = Movie::updateOrCreate(
                    ['id' => $movie['id']], // Використовуємо ID з TMDB як унікальний ключ
                    [
                        'adult' => $movie['adult'] ?? false,
                        'backdrop_path' => $movie['backdrop_path'] ?? null,
                        'original_language' => $movie['original_language'] ?? 'unknown',
                        'original_title' => $movie['original_title'] ?? '',
                        'overview' => $movie['overview'] ?? null,
                        'popularity' => $movie['popularity'] ?? 0,
                        'poster_path' => $movie['poster_path'] ?? null,
                        'release_date' => $this->validateDate($movie['release_date'] ?? null),
                        'title' => $movie['title'] ?? '',
                        'video' => $movie['video'] ?? false,
                        'vote_average' => $movie['vote_average'] ?? 0,
                        'vote_count' => $movie['vote_count'] ?? 0,
                    ]
                );

                // Синхронізація жанрів
                $genreIds = [];
                foreach ($movie['genre_ids'] ?? [] as $genreId) {
                    $genre = Genre::firstOrCreate(['id' => $genreId], ['name' => "Genre {$genreId}"]);
                    $genreIds[] = $genre->id;
                }

                $newMovie->genres()->sync($genreIds);
            }
        }

        $progressBar->finish();
        $this->newLine();
        $this->info('All movies imported successfully!');
        return Command::SUCCESS;
    }

    protected function validateDate($date)
    {
        return (bool)strtotime($date) ? $date : null;
    }
}
