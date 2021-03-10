<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{
    /**
     * Display the games home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Display a single game of the given slug.
     *
     * @param  string  $slug
     * @return \Facade\FlareClient\View
     */
    public function show($slug)
    {
        $game = Http::withHeaders(config('services.igdb'))
                ->withBody(
                    "fields name, cover.url, first_release_date, platforms.abbreviation, rating, slug, involved_companies.company.name, genres.name, aggregated_rating, summary, websites.*, videos.*, screenshots.*, similar_games.cover.url, similar_games.name, similar_games.rating, similar_games.platforms.abbreviation, similar_games.slug;
                    where slug=\"{$slug}\";",
                    "text"
                )
                ->post('https://api.igdb.com/v4/games')
                ->json();

        dump($game);

        if (empty($game)) {
            abort(404);
        }

        $game = $game[0];

        return view('show', compact('game'));
    }
}
