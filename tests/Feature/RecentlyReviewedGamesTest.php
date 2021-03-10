<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Facades\Http;
use App\Http\Livewire\RecentlyReviewedGames;

class RecentlyReviewedGamesTest extends TestCase
{
    /** @test */
    public function main_page_shows_recently_reviewed_games()
    {
        $this->withoutExceptionHandling();

        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakeRecentlyReviewedGames(),
        ]);

        Livewire::test(RecentlyReviewedGames::class)
            ->assertSet('recentlyReviewedGames', [])
            ->call('loadRecentlyReviewedGames')
            ->assertSee('Fake Dragon Ball Card Warriors')
            ->assertSee("PC, PS4, XONE");
    }

    private function fakeRecentlyReviewedGames()
    {
        return Http::response([
              0 => [
                "id" => 142494,
                "cover" => [
                  "id" => 124855,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2oc7.jpg",
                ],
                "first_release_date" => 1603756800,
                "name" => "Fake Dragon Ball Card Warriors",
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
                ],
                "rating" => 100.0,
                "rating_count" => 11,
                "slug" => "dragon-ball-card-warriors",
                "summary" => "Choose your Saiyans , draw your deck, and get ready for Dragon Ball Card WARRIORS - The in Depth/Fast paced strategy card game that's easy to learn and INCREDIBLY FUN! Start a free game inside of Dragon Ball Z: Kakarot (on Steam) & play your cards to sling Events, summon DBZ Characters, and SPECIAL Character Cards!!! Go SUPER in duels of epic strategy! With a powerful deck building system, and hundreds of additional cards to craft, WIN or purchase - your collection never stops GROWING! Challenge players of all skill levels or hone your skills in practice matches against some of the greatest strategists and more! As well as monthly Tournaments to jump into! The FUN never stops!"
              ],
              1 => [
                "id" => 141408,
                "cover" => [
                  "id" => 121126,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2lgm.jpg",
                ],
                "first_release_date" => 1606435200,
                "name" => "Zaos",
                "platforms" => [
                  0 => [
                    "id" => 6,
                    "abbreviation" => "PC",
                  ],
                ],
                "rating" => 100.0,
                "rating_count" => 9,
                "slug" => "zaos",
                "summary" => "International Free to Play Fantasy MMORPG game, featuring incredible journeys through a beautiful expanding world."
              ],
              2 => [
                "id" => 26834,
                "cover" => [
                  "id" => 88375,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1w6v.jpg",
                ],
                "first_release_date" => 1474416000,
                "name" => "Utawarerumono: Mask of Truth",
                "platforms" => [
                  0 => [
                    "id" => 6,
                    "abbreviation" => "PC",
                  ],
                  1 => [
                    "id" => 9,
                    "abbreviation" => "PS3",
                  ],
                  2 => [
                    "id" => 46,
                    "abbreviation" => "Vita",
                  ],
                  3 => [
                    "id" => 48,
                    "abbreviation" => "PS4",
                  ],
                ],
                "rating" => 99.807005532081,
                "rating_count" => 7,
                "slug" => "utawarerumono-mask-of-truth",
                "summary" => "The epic story of Utawarerumono comes to an end in Mask of Truth, as the fate of the world will be determined by warring nations. The game features exciting SRPG battles, a colorful cast of new/familiar faces that will determine the fate of their world, a rousing original soundtrack, and the dramatic conclusion to the journey of Haku. After the events of Mask of Deception, Haku is destined to rally the nation of Ennakamuy to fight against the evil forces that now control the Yamato throne. With everything on the line, Haku and his friends must do everything in their power to ensure that the future of Yamato triumphs over the true evil that lurks in the depth of the darkness."
              ],
            ], 200);
    }
}
