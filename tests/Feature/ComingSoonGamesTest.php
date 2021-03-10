<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Facades\Http;
use App\Http\Livewire\ComingSoonGames;

class ComingSoonGamesTest extends TestCase
{
    /** @test */
    public function main_page_shows_most_anticipated_games()
    {
        $this->withoutExceptionHandling();

        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakeComingSoonGames(),
        ]);

        Livewire::test(ComingSoonGames::class)
            ->assertSet('comingSoonGames', [])
            ->call('loadComingSoonGames')
            ->assertSee('Fake Lust from Beyond')
            ->assertSee(Carbon::parse(1615420800)->format('M d, Y'))
            ->assertSee('//images.igdb.com/igdb/image/upload/t_cover_small/co2txe.jpg');
    }

    private function fakeComingSoonGames()
    {
        return Http::response([
              0 => [
                "id" => 115903,
                "cover" => [
                  "id" => 132098,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2txe.jpg",
                ],
                "first_release_date" => 1615420800,
                "name" => "Fake Lust from Beyond",
                "slug" => "lust-from-beyond",
              ],
              1 => [
                "id" => 118439,
                "cover" => [
                  "id" => 132125,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2ty5.jpg",
                ],
                "first_release_date" => 1615420800,
                "name" => "Sapper: Defuse The Bomb Simulator",
                "slug" => "sapper-defuse-the-bomb-simulator",
              ],
              2 => [
                "id" => 127337,
                "cover" => [
                  "id" => 119102,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2jwe.jpg",
                ],
                "first_release_date" => 1615420800,
                "name" => "BOY BEATS WORLD",
                "slug" => "boy-beats-world",
              ],
              3 => [
                "id" => 131871,
                "cover" => [
                  "id" => 105963,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co29rf.jpg",
                ],
                "first_release_date" => 1615420800,
                "name" => "Cyanide & Happiness: Freakpocalypse",
                "slug" => "cyanide-and-happiness-freakpocalypse",
              ],
            ], 200);
    }
}
