<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class RecentlyReviewedGames extends Component
{
    public $recentlyReviewedGames = [];

    public function loadRecentlyReviewedGames()
    {
        $this->recentlyReviewedGames = Cache::remember('recently-reviewed-games', 30, function () {
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
    }

    public function render()
    {
        return view('livewire.recently-reviewed-games');
    }
}
