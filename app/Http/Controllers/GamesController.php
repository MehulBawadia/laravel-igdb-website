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
        $current = now()->timestamp;
        $comingSoonGames = Http::withHeaders(config('services.igdb'))
                        ->withBody(
                            "fields cover.url, first_release_date, name, total_rating, rating;
                            where platforms = (6, 48, 49, 130) &
                            first_release_date > {$current};
                            sort first_release_date asc;
                            limit 4;",
                            "text"
                        )->post('https://api.igdb.com/v4/games')->json();

        return view('welcome', compact('comingSoonGames'));
    }
}
