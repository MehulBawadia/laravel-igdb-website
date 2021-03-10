<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ComingSoonGames extends Component
{
    public $comingSoonGames = [];

    public function loadComingSoonGames()
    {
        $comingSoonGames = Cache::remember('coming-soon-games', 30, function () {
            $current = now()->timestamp;

            return Http::withHeaders(config('services.igdb'))
                    ->withBody(
                        "fields cover.url, first_release_date, name, total_rating, rating, slug;
                        where platforms = (6, 48, 49, 130) &
                        first_release_date > {$current};
                        sort first_release_date asc;
                        limit 4;",
                        "text"
                    )->post('https://api.igdb.com/v4/games')->json();
        });

        $this->comingSoonGames = $this->formatForView($comingSoonGames);
    }

    public function render()
    {
        return view('livewire.coming-soon-games');
    }

    private function formatForView($games)
    {
        return collect($games)->map(function ($game) {
            return collect($game)->merge([
                'coverImageUrl' => Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']),
                'release_date' => Carbon::parse($game['first_release_date'])->format('M d, Y'),
            ]);
        })->toArray();
    }
}
