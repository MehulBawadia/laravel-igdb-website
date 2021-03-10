<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;

class ViewGameTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->withoutExceptionHandling();

        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakeSingleGame(),
        ]);

        $response = $this->get(route('games.show', 'fake-gloam'));

        $response->assertStatus(200);
        $response->assertSee('Fake Gloam');
        $response->assertSee('Arcade');
        $response->assertSee('CORDYLUS');
        $response->assertSee('PC');
        $response->assertSee('99');
        $response->assertSee('0');
        $response->assertSee('https://twitter.com/CordylusGames');
        $response->assertSee('In Fake Gloam, the player embodies a small candle which must in order to survive, steal light from other players. The confrontation is done via mini-games of logic and speed. The last of the 10 participants to still have the light wins.');
        $response->assertSee('//images.igdb.com/igdb/image/upload/t_screenshot_big/sc93il.jpg');
        $response->assertSee('Submarine');
    }

    private function fakeSingleGame()
    {
        return Http::response([
              0 => [
                "id" => 144133,
                "cover" => [
                  "id" => 132441,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2u6x.jpg",
                ],
                "first_release_date" => 1614556800,
                "genres" => [
                  0 => [
                    "id" => 33,
                    "name" => "Arcade",
                  ],
                ],
                "involved_companies" => [
                  0 => [
                    "id" => 120218,
                    "company" => [
                      "id" => 32220,
                      "name" => "CORDYLUS",
                    ],
                  ],
                ],
                "name" => "Fake Gloam",
                "platforms" => [
                  0 => [
                    "id" => 6,
                    "abbreviation" => "PC",
                  ],
                ],
                "rating" => 99.179487179487,
                "screenshots" => [
                  0 => [
                    "id" => 424461,
                    "alpha_channel" => true,
                    "animated" => false,
                    "game" => 144133,
                    "height" => 1075,
                    "image_id" => "sc93il",
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc93il.jpg",
                    "width" => 1918,
                    "checksum" => "a6c856b1-bf0a-0b08-1e49-c22ef675086e",
                  ],
                  1 => [
                    "id" => 424462,
                    "alpha_channel" => true,
                    "animated" => false,
                    "game" => 144133,
                    "height" => 1013,
                    "image_id" => "sc93im",
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc93im.jpg",
                    "width" => 1796,
                    "checksum" => "a863dcba-7d9f-1355-4c22-33510ba2dcc7",
                  ],
                ],
                "similar_games" => [
                  0 => [
                    "id" => 68458,
                    "cover" => [
                      "id" => 30165,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sxjskizvhftmz1jtko7l.jpg",
                    ],
                    "name" => "Submarine",
                    "platforms" => [
                      0 => [
                        "id" => 142,
                      ],
                      1 => [
                        "id" => 146,
                      ],
                    ],
                    "slug" => "submarine--1",
                  ],
                  1 => [
                    "id" => 87150,
                    "cover" => [
                      "id" => 62964,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/riprld1ne9lxihjlyauj.jpg",
                    ],
                    "name" => "Infinity Beats Song Edition",
                    "platforms" => [
                      0 => [
                        "id" => 14,
                        "abbreviation" => "Mac",
                      ],
                    ],
                    "slug" => "infinity-beats-song-edition",
                  ],
                  2 => [
                    "id" => 87170,
                    "cover" => [
                      "id" => 63131,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/gcsw2oz25sdtlnhdfpoi.jpg",
                    ],
                    "name" => "One More Brick",
                    "platforms" => [
                      0 => [
                        "id" => 39,
                        "abbreviation" => "iOS",
                      ],
                    ],
                    "rating" => 90.0,
                    "slug" => "one-more-brick",
                  ],
                  3 => [
                    "id" => 87514,
                    "cover" => [
                      "id" => 82600,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rqg.jpg",
                    ],
                    "name" => "Granny",
                    "platforms" => [
                      0 => [
                        "id" => 6,
                        "abbreviation" => "PC",
                      ],
                      1 => [
                        "id" => 39,
                        "abbreviation" => "iOS",
                      ],
                    ],
                    "rating" => 81.177683444512,
                    "slug" => "granny",
                  ],
                  4 => [
                    "id" => 87728,
                    "cover" => [
                      "id" => 96491,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co22gb.jpg",
                    ],
                    "name" => "Pigeon Pop",
                    "platforms" => [
                      0 => [
                        "id" => 39,
                        "abbreviation" => "iOS",
                      ],
                    ],
                    "rating" => 60.0,
                    "slug" => "pigeon-pop",
                  ],
                  5 => [
                    "id" => 90788,
                    "cover" => [
                      "id" => 82609,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rqp.jpg",
                    ],
                    "name" => "Munchkin Match",
                    "platforms" => [
                      0 => [
                        "id" => 39,
                        "abbreviation" => "iOS",
                      ],
                    ],
                    "rating" => 90.0,
                    "slug" => "munchkin-match",
                  ],
                  6 => [
                    "id" => 90965,
                    "cover" => [
                      "id" => 82276,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rhg.jpg",
                    ],
                    "name" => "Donut Drop by ABCya",
                    "platforms" => [
                      0 => [
                        "id" => 39,
                        "abbreviation" => "iOS",
                      ],
                    ],
                    "slug" => "donut-drop-by-abcya",
                  ],
                  7 => [
                    "id" => 112078,
                    "cover" => [
                      "id" => 69336,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1hi0.jpg",
                    ],
                    "name" => "Sky Gamblers: Storm Raiders 2",
                    "platforms" => [
                      0 => [
                        "id" => 34,
                        "abbreviation" => "Android",
                      ],
                      1 => [
                        "id" => 39,
                        "abbreviation" => "iOS",
                      ],
                    ],
                    "slug" => "sky-gamblers-storm-raiders-2",
                  ],
                  8 => [
                    "id" => 120268,
                    "cover" => [
                      "id" => 82665,
                      "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rs9.jpg",
                    ],
                    "name" => "Zombie Driver: Immortal Edition",
                    "platforms" => [
                      0 => [
                        "id" => 130,
                        "abbreviation" => "Switch",
                      ],
                    ],
                    "slug" => "zombie-driver-immortal-edition",
                  ],
                ],
                "slug" => "fake-gloam",
                "summary" => "In Fake Gloam, the player embodies a small candle which must in order to survive, steal light from other players. The confrontation is done via mini-games of logic and speed. The last of the 10 participants to still have the light wins.",
                "videos" => [
                  0 => [
                    "id" => 46132,
                    "game" => 144133,
                    "name" => "Announcement Trailer",
                    "video_id" => "NwYzPByF-Ck",
                    "checksum" => "8bdb4834-0960-e2e3-73e6-1cec302aa507",
                  ],
                ],
                "websites" => [
                  0 => [
                    "id" => 171546,
                    "category" => 13,
                    "game" => 144133,
                    "trusted" => true,
                    "url" => "https://store.steampowered.com/app/1159960/Gloam",
                    "checksum" => "433e7d00-a171-b02a-686b-fa6f0b7dbf2f",
                  ],
                  1 => [
                    "id" => 171547,
                    "category" => 12,
                    "game" => 144133,
                    "trusted" => true,
                    "url" => "https://play.google.com/store/apps/details?id=com.Cordylus.Gloam",
                    "checksum" => "6bfef0c9-0327-725c-9775-38c8df314293",
                  ],
                  2 => [
                    "id" => 171548,
                    "category" => 4,
                    "game" => 144133,
                    "trusted" => true,
                    "url" => "https://www.facebook.com/CordylusGames",
                    "checksum" => "6237e7bf-c2e9-bce6-d8bc-b577b2703cf7",
                  ],
                  3 => [
                    "id" => 171549,
                    "category" => 5,
                    "game" => 144133,
                    "trusted" => true,
                    "url" => "https://twitter.com/CordylusGames",
                    "checksum" => "fe2e13ba-4dd5-c820-f70e-288273dc5921",
                  ],
                ],
              ],
            ], 200);
    }
}
