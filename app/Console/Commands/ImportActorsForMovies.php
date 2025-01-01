<?php

namespace App\Console\Commands;

use App\Models\Movie;
use App\Models\Actor;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ImportActorsForMovies extends Command
{
    protected $signature = 'actors:import-for-movies';
    protected $description = 'Import actors for all movies from TMDB API';

    public function handle()
    {
        $apiKey = config('services.tmdb.api_key');
        $this->info('Starting actors import for movies...');

        $totalMovies = Movie::count();
        $this->info('Found ' . $totalMovies . ' movies.');

        $this->output->progressStart($totalMovies);

        Movie::chunk(100, function ($movies) use ($apiKey) {
            foreach ($movies as $movie) {
                $this->output->progressAdvance();

                $response = Http::get("https://api.themoviedb.org/3/movie/{$movie->id}/credits", [
                    'api_key' => $apiKey,
                ]);

                if ($response->failed()) {
                    $this->error("Failed to fetch actors for movie: {$movie->title}");
                    continue;
                }

                $cast = array_slice($response->json('cast'), 0, 5);

                foreach ($cast as $actorData) {
                    $actor = Actor::find($actorData['id']);

                    if (!$actor) {
                        $actorResponse = Http::get("https://api.themoviedb.org/3/person/{$actorData['id']}", [
                            'api_key' => $apiKey,
                        ]);

                        if ($actorResponse->failed()) {
                            $this->error("Failed to fetch detailed information for actor: {$actorData['name']}");
                            continue;
                        }

                        $actorDetails = $actorResponse->json();

                        $actor = Actor::create([
                            'id' => $actorDetails['id'],
                            'name' => $actorDetails['name'],
                            'biography' => $actorDetails['biography'] ?? null,
                            'birthday' => $actorDetails['birthday'] ?? null,
                            'gender' => $actorDetails['gender'],
                            'popularity' => $actorDetails['popularity'],
                            'profile_path' => $actorDetails['profile_path'],
                            'place_of_birth' => $actorDetails['place_of_birth'] ?? null,
                            'imdb_id' => $actorDetails['imdb_id'] ?? null,
                            'also_known_as' => $actorDetails['also_known_as'] ?? [],
                        ]);
                    }

                    $character = Str::limit($actorData['character'] ?? '', 200);
                    $movie->actors()->attach($actor->id, [
                        'character' => $character,
                        'cast_id' => $actorData['cast_id'],
                        'order' => $actorData['order'],
                    ]);
                }
            }
        });

        $this->output->progressFinish();

        $this->info('Actors import completed!');
        return Command::SUCCESS;
    }
}
