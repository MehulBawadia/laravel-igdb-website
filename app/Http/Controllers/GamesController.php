<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
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

        if (empty($game)) {
            abort(404);
        }

        $game = $this->formatGameForView($game[0]);

        return view('show', compact('game'));
    }

    private function formatGameForView($game)
    {
        return collect($game)->merge([
            'coverImageUrl' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
            'memberRating' => isset($game['rating']) ? round($game['rating']) : '0',
            'criticRating' => isset($game['aggregated_rating']) ? round($game['rating']) : '0',
            'genres' => collect($game['genres'])->pluck('name')->implode(', '),
            'involvedCompanies' => $game['involved_companies'][0]['company']['name'],
            'platformAbbreviations' => collect($game['platforms'])->pluck('abbreviation')->implode(', '),
            'trailerVideo' => "https://youtube.com/watch/{$game['videos'][0]['video_id']}",
            'screenshots' => collect($game['screenshots'])->map(function ($screenshot) {
                return [
                    'big' => Str::replaceFirst('thumb', 'screenshot_big', $screenshot['url']),
                    'huge' => Str::replaceFirst('thumb', 'screenshot_huge', $screenshot['url']),
                ];
            })->take(9),
            'similarGames' => collect($game['similar_games'])->map(function ($g) {
                return collect($g)->merge([
                    'coverImageUrl' => array_key_exists('cover', $g)
                                    ? Str::replaceFirst('thumb', 'cover_big', $g['cover']['url'])
                                    : 'https://via.placeholder.com/264x352',
                    'rating' => isset($g['rating']) ? round($g['rating']) : '0',
                    'platformAbbreviations' => array_key_exists('platforms', $g)
                                            ? collect($g['platforms'])->pluck('abbreviation')->implode(', ')
                                            : null,
                ]);
            })->take(6),
            'social' => [
                'website' => collect($game['websites'])->first(),
                'facebook' => collect($game['websites'])->first(function ($website) {
                    return Str::contains($website['url'], 'facebook');
                }),
                'twitter' => collect($game['websites'])->first(function ($website) {
                    return Str::contains($website['url'], 'twitter');
                }),
                'instagram' => collect($game['websites'])->first(function ($website) {
                    return Str::contains($website['url'], 'instagram');
                }),
            ],
        ]);
    }
}
