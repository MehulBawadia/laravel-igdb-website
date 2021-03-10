<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class MostAnticipatedGames extends Component
{
    public $mostAnticipatedGames = [];

    public function loadMostAnticipatedGames()
    {
        $this->mostAnticipatedGames = Cache::remember('most-anticipated-games', 10, function () {
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
    }

    public function render()
    {
        return view('livewire.most-anticipated-games');
    }
}
