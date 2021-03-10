<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class RecentlyReviewedGames extends Component
{
    public $recentlyReviewedGames = [];

    public function loadRecentlyReviewedGames()
    {
        $recentlyReviewedGames = Cache::remember('recently-reviewed-games', 30, function () {
            $current = now()->timestamp;

            return Http::withHeaders(config('services.igdb'))
                    ->withBody(
                        "fields cover.url, first_release_date, name, platforms.abbreviation, rating, rating_count, slug, summary;
                        where platforms = (6, 48, 49, 130) & rating != null & first_release_date < {$current} & rating_count > 5;
                        sort rating desc;
                        limit 3;",
                        "text"
                    )->post('https://api.igdb.com/v4/games')->json();
        });

        $this->recentlyReviewedGames = $this->formatForView($recentlyReviewedGames);

        collect($this->recentlyReviewedGames)->filter(function ($game) {
            return $game['rating'];
        })->each(function ($game) {
            $this->emit('recentlyReviewedGamesLoaded', [
                'slug' => 'review_'.$game['slug'],
                'rating' => $game['rating'] / 100,
            ]);
        });
    }

    public function render()
    {
        return view('livewire.recently-reviewed-games');
    }

    private function formatForView($games)
    {
        return collect($games)->map(function ($game) {
            return collect($game)->merge([
                'coverImageUrl' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                'rating' => isset($game['rating']) ? round($game['rating']) : '0',
                'platformAbbreviations' => collect($game['platforms'])->pluck('abbreviation')->implode(', '),
            ]);
        })->toArray();
    }
}
