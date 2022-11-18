<?php


use App\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /** @test */
    function it_scores_a_gutter_game_as_score()
    {
        $game = new Game();

        foreach (range(1, 20) as $roll) {
            $game->roll(0);
        }

        $this->assertSame(0, $game->score());
    }

    /** @test */
    function it_scores_all_ones()
    {
        $game = new Game();

        foreach (range(1, 20) as $roll) {
            $game->roll(1);
        }

        $this->assertSame(20, $game->score());
    }

    /** @test */
    function it_awards_a_one_roll_bonus_for_every_spare()
    {
        $game = new Game();

        $game->roll(5);
        $game->roll(5);
        $game->roll(8);

        foreach (range(1, 17) as $roll) {
            $game->roll(0);
        }

        $this->assertSame(26, $game->score());
    }
}
