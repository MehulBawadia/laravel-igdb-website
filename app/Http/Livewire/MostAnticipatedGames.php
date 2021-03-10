<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class MostAnticipatedGames extends Component
{
    public $mostAnticipatedGames = [];

    public function loadMostAnticipatedGames()
    {
        $mostAnticipatedGames = Cache::remember('most-anticipated-games', 10, function () {
            $current = now()->timestamp;
            $afterFourMonths = now()->addMonths(4)->timestamp;

            return Http::withHeaders(config('services.igdb'))
                    ->withBody(
                        "fields cover.url, first_release_date, name, platforms.abbreviation, total_rating, slug;
                        where platforms = (6, 48, 49, 130) &
                        first_release_date <= {$afterFourMonths} & first_release_date > {$current};
                        sort total_rating asc;
                        limit 4;",
                        "text"
                    )->post('https://api.igdb.com/v4/games')->json();
        });

        $this->mostAnticipatedGames = $this->formatForView($mostAnticipatedGames);
    }

    public function render()
    {
        return view('livewire.most-anticipated-games');
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
