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
        $popularGames = Http::withHeaders(config('services.igdb'))
                        ->withBody(
                            "fields cover.url, first_release_date, name, platforms.abbreviation, rating;
                            where platforms = (6, 48, 49, 130) & rating != null;
                            sort rating desc;
                            limit 12;",
                            "text"
                        )->post('https://api.igdb.com/v4/games')->json();

        $recentlyReviewed = Http::withHeaders(config('services.igdb'))
                        ->withBody(
                            "fields cover.url, first_release_date, name, platforms.abbreviation, rating, rating_count, summary;
                            where platforms = (6, 48, 49, 130) & rating != null & first_release_date < {$current} & rating_count > 5;
                            sort rating desc;
                            limit 3;",
                            "text"
                        )->post('https://api.igdb.com/v4/games')->json();

        $afterFourMonths = now()->addMonths(4)->timestamp;
        $mostAnticipated = Http::withHeaders(config('services.igdb'))
                        ->withBody(
                            "fields cover.url, first_release_date, name, platforms.abbreviation, total_rating;
                            where platforms = (6, 48, 49, 130) &
                            first_release_date <= {$afterFourMonths} & first_release_date > {$current};
                            sort total_rating asc;
                            limit 4;",
                            "text"
                        )->post('https://api.igdb.com/v4/games')->json();

        $comingSoonGames = Http::withHeaders(config('services.igdb'))
                        ->withBody(
                            "fields cover.url, first_release_date, name, total_rating, rating;
                            where platforms = (6, 48, 49, 130) &
                            first_release_date > {$current};
                            sort first_release_date asc;
                            limit 4;",
                            "text"
                        )->post('https://api.igdb.com/v4/games')->json();

        return view('welcome', compact('popularGames', 'recentlyReviewed', 'mostAnticipated', 'comingSoonGames'));
    }
}
