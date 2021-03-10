<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PopularGames extends Component
{
    public $popularGames = [];

    public function loadPopularGames()
    {
        $popularGames = Cache::remember('popular-games', 30, function () {
            $before = now()->subMonths(2)->timestamp;
            $after = now()->addMonths(2)->timestamp;

            return Http::withHeaders(config('services.igdb'))
                    ->withBody(
                        "fields cover.url, first_release_date, name, platforms.abbreviation, rating, slug;
                        where platforms = (6, 48, 49, 130) &
                        (first_release_date >= {$before} & first_release_date < {$after}) &
                        rating != null;
                        sort rating desc;
                        limit 12;",
                        "text"
                    )->post('https://api.igdb.com/v4/games')->json();
        });

        $this->popularGames = $this->formatForView($popularGames);
    }

    public function render()
    {
        return view('livewire.popular-games');
    }

    private function formatForView($games)
    {
        return collect($games)->map(function ($game) {
            return collect($game)->merge([
                'coverImageUrl' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                'rating' => isset($game['rating']) ? round($game['rating']).'%' : '0%',
                'platformAbbreviations' => collect($game['platforms'])->pluck('abbreviation')->implode(', '),
            ]);
        })->toArray();
    }
}
