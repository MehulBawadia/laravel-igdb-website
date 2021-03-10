<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\PopularGames;
use Illuminate\Support\Facades\Http;

class PopularGamesTest extends TestCase
{
    /** @test */
    public function main_page_shows_popular_games()
    {
        $this->withoutExceptionHandling();

        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakePopularGames(),
        ]);

        Livewire::test(PopularGames::class)
            ->assertSet('popularGames', [])
            ->call('loadPopularGames')
            ->assertSee('Fake Gloam')
            ->assertSee("Super Mario 3D World + Bowser's Fury")
            ->assertSee("PC")
            ->assertSee("The Medium");
    }

    private function fakePopularGames()
    {
        return Http::response([
          0 => [
            "id" => 144133,
            "cover" => [
              "id" => 132441,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2u6x.jpg",
            ],
            "first_release_date" => 1614556800,
            "name" => "Fake Gloam",
            "platforms" => [
              0 => [
                "id" => 6,
                "abbreviation" => "PC",
              ],
            ],
            "rating" => 99.179487179487,
            "slug" => "gloam",
          ],
          1 => [
            "id" => 104967,
            "cover" => [
              "id" => 90408,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1xrc.jpg",
            ],
            "first_release_date" => 1612224000,
            "name" => "Valheim",
            "platforms" => [
              0 => [
                "id" => 6,
                "abbreviation" => "PC",
              ],
            ],
            "rating" => 90.002616431188,
            "slug" => "valheim",
          ],
          2 => [
            "id" => 138227,
            "cover" => [
              "id" => 133065,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2uo9.jpg",
            ],
            "first_release_date" => 1613088000,
            "name" => "Super Mario 3D World + Bowser's Fury",
            "platforms" => [
              0 => [
                "id" => 130,
                "abbreviation" => "Switch",
              ],
            ],
            "rating" => 90.0,
            "slug" => "super-mario-3d-world-plus-bowsers-fury",
          ],
          3 => [
            "id" => 121760,
            "cover" => [
              "id" => 79321,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1p7d.jpg",
            ],
            "first_release_date" => 1613001600,
            "name" => "Little Nightmares II",
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
              5 => [
                "id" => 169,
                "abbreviation" => "Series X",
              ],
              6 => [
                "id" => 170,
                "abbreviation" => "Stadia",
              ],
            ],
            "rating" => 89.259948093329,
            "slug" => "little-nightmares-ii",
          ],
          4 => [
            "id" => 134595,
            "cover" => [
              "id" => 105761,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co29lt.jpg",
            ],
            "first_release_date" => 1611100800,
            "name" => "HITMAN 3",
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
              4 => [
                "id" => 169,
                "abbreviation" => "Series X",
              ],
              5 => [
                "id" => 170,
                "abbreviation" => "Stadia",
              ],
            ],
            "rating" => 81.939316196664,
            "slug" => "hitman-3",
          ],
          5 => [
            "id" => 98073,
            "cover" => [
              "id" => 89279,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1wvz.jpg",
            ],
            "first_release_date" => 1614384000,
            "name" => "Urtuk: The Desolation",
            "platforms" => [
              0 => [
                "id" => 3,
                "abbreviation" => "Linux",
              ],
              1 => [
                "id" => 6,
                "abbreviation" => "PC",
              ],
              2 => [
                "id" => 14,
                "abbreviation" => "Mac",
              ],
            ],
            "rating" => 80.0,
            "slug" => "urtuk-the-desolation",
          ],
          6 => [
            "id" => 133308,
            "cover" => [
              "id" => 130014,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2sbi.jpg",
            ],
            "first_release_date" => 1611792000,
            "name" => "The Medium",
            "platforms" => [
              0 => [
                "id" => 6,
                "abbreviation" => "PC",
              ],
              1 => [
                "id" => 169,
                "abbreviation" => "Series X",
              ],
            ],
            "rating" => 70.484943614017,
            "slug" => "the-medium",
          ],
          7 => [
            "id" => 127842,
            "cover" => [
              "id" => 90040,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1xh4.jpg",
            ],
            "first_release_date" => 1611187200,
            "name" => "Skul: The Hero Slayer",
            "platforms" => [
              0 => [
                "id" => 6,
                "abbreviation" => "PC",
              ],
            ],
            "rating" => 70.0,
            "slug" => "skul-the-hero-slayer",
          ],
          8 => [
            "id" => 126356,
            "cover" => [
              "id" => 92581,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1zfp.jpg",
            ],
            "first_release_date" => 1613692800,
            "name" => "Survival Vacancy",
            "platforms" => [
              0 => [
                "id" => 6,
                "abbreviation" => "PC",
              ],
            ],
            "rating" => 70.0,
            "slug" => "survival-vacancy",
          ],
          9 => [
            "id" => 122104,
            "cover" => [
              "id" => 131441,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2tf5.jpg",
            ],
            "first_release_date" => 1613088000,
            "name" => "Wheel of Fate",
            "platforms" => [
              0 => [
                "id" => 6,
                "abbreviation" => "PC",
              ],
            ],
            "rating" => 70.0,
            "slug" => "wheel-of-fate",
          ],
          10 => [
            "id" => 121064,
            "cover" => [
              "id" => 80974,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1qha.jpg",
            ],
            "first_release_date" => 1611187200,
            "name" => "Bullet Roulette VR",
            "platforms" => [
              0 => [
                "id" => 48,
                "abbreviation" => "PS4",
              ],
            ],
            "rating" => 70.0,
            "slug" => "bullet-roulette-vr",
          ],
          11 => [
            "id" => 24989,
            "cover" => [
              "id" => 85851,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1u8r.jpg",
            ],
            "first_release_date" => 1614124800,
            "name" => "HellSign",
            "platforms" => [
              0 => [
                "id" => 6,
                "abbreviation" => "PC",
              ],
              1 => [
                "id" => 14,
                "abbreviation" => "Mac",
              ],
            ],
            "rating" => 70.0,
            "slug" => "hellsign",
          ],
        ], 200);
    }
}
