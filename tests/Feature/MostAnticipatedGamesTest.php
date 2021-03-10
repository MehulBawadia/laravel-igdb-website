<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Facades\Http;
use App\Http\Livewire\MostAnticipatedGames;

class MostAnticipatedGamesTest extends TestCase
{
    /** @test */
    public function main_page_shows_most_anticipated_games()
    {
        $this->withoutExceptionHandling();

        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakeMostAnticipatedGames(),
        ]);

        Livewire::test(MostAnticipatedGames::class)
            ->assertSet('mostAnticipatedGames', [])
            ->call('loadMostAnticipatedGames')
            ->assertSee('Oddworld: Soulstorm')
            ->assertSee(Carbon::parse(1617148800)->format('M d, Y'))
            ->assertSee('//images.igdb.com/igdb/image/upload/t_cover_small/co2n6a.jpg');
    }

    private function fakeMostAnticipatedGames()
    {
        return Http::response([
              0 => [
                "id" => 9687,
                "cover" => [
                  "id" => 118486,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2jfa.jpg",
                ],
                "first_release_date" => 1625097600,
                "name" => "Little Devil Inside",
                "platforms" => [
                  0 => [
                    "id" => 6,
                    "abbreviation" => "PC",
                  ],
                  1 => [
                    "id" => 48,
                    "abbreviation" => "PS4",
                  ],
                  2 => [
                    "id" => 49,
                    "abbreviation" => "XONE",
                  ],
                  3 => [
                    "id" => 130,
                    "abbreviation" => "Switch",
                  ],
                  4 => [
                    "id" => 167,
                    "abbreviation" => "PS5",
                  ],
                ],
                "slug" => "little-devil-inside",
              ],
              1 => [
                "id" => 18357,
                "cover" => [
                  "id" => 123346,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2n6a.jpg",
                ],
                "first_release_date" => 1617148800,
                "name" => "Oddworld: Soulstorm",
                "platforms" => [
                  0 => [
                    "id" => 6,
                    "abbreviation" => "PC",
                  ],
                  1 => [
                    "id" => 48,
                    "abbreviation" => "PS4",
                  ],
                  2 => [
                    "id" => 49,
                    "abbreviation" => "XONE",
                  ],
                  3 => [
                    "id" => 167,
                    "abbreviation" => "PS5",
                  ],
                ],
                "slug" => "oddworld-soulstorm",
              ],
              2 => [
                "id" => 24517,
                "cover" => [
                  "id" => 131547,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2ti3.jpg",
                ],
                "first_release_date" => 1622505600,
                "name" => "Beard Blade",
                "platforms" => [
                  0 => [
                    "id" => 6,
                    "abbreviation" => "PC",
                  ],
                ],
                "slug" => "beard-blade",
              ],
              3 => [
                "id" => 24654,
                "cover" => [
                  "id" => 86703,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1uwf.jpg",
                ],
                "first_release_date" => 1625011200,
                "name" => "New World",
                "platforms" => [
                  0 => [
                    "id" => 6,
                    "abbreviation" => "PC",
                  ],
                ],
                "slug" => "new-world",
              ],
            ], 200);
    }
}
