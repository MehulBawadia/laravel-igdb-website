<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PopularGames extends Component
{
    public $popularGames = [];

    public function loadPopularGames()
    {
        $this->popularGames = Cache::remember('popular-games', 30, function () {
            $before = now()->subMonths(2)->timestamp;
            $after = now()->addMonths(2)->timestamp;

            return Http::withHeaders(config('services.igdb'))
                    ->withBody(
                        "fields cover.url, first_release_date, name, platforms.abbreviation, rating;
                        where platforms = (6, 48, 49, 130) &
                        (first_release_date >= {$before} & first_release_date < {$after}) &
                        rating != null;
                        sort rating desc;
                        limit 12;",
                        "text"
                    )->post('https://api.igdb.com/v4/games')->json();
        });
    }

    public function render()
    {
        return view('livewire.popular-games');
    }
}
