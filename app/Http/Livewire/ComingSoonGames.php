<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ComingSoonGames extends Component
{
    public $comingSoonGames = [];

    public function loadComingSoonGames()
    {
        $current = now()->timestamp;

        $comingSoonGames = Http::withHeaders(config('services.igdb'))
                        ->withBody(
                            "fields cover.url, first_release_date, name, total_rating, rating;
                            where platforms = (6, 48, 49, 130) &
                            first_release_date > {$current};
                            sort first_release_date asc;
                            limit 4;",
                            "text"
                        )->post('https://api.igdb.com/v4/games');

        $this->comingSoonGames = $comingSoonGames->json();
    }

    public function render()
    {
        return view('livewire.coming-soon-games');
    }
}
