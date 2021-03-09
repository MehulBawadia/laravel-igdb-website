<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class RecentlyReviewedGames extends Component
{
    public $recentlyReviewedGames = [];

    public function loadRecentlyReviewedGames()
    {
        $current = now()->timestamp;
        $recentlyReviewed = Http::withHeaders(config('services.igdb'))
                        ->withBody(
                            "fields cover.url, first_release_date, name, platforms.abbreviation, rating, rating_count, summary;
                            where platforms = (6, 48, 49, 130) & rating != null & first_release_date < {$current} & rating_count > 5;
                            sort rating desc;
                            limit 3;",
                            "text"
                        )->post('https://api.igdb.com/v4/games');

        $this->recentlyReviewedGames = $recentlyReviewed->json();
    }

    public function render()
    {
        return view('livewire.recently-reviewed-games');
    }
}
