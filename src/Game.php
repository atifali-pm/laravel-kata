<?php

namespace App;

class Game
{
    const FRAMES_PER_GAME = 10;
    protected $rolls = [];
    public function roll(int $pins)
    {
        $this->rolls[] = $pins;
    }

    public function score()
    {
        $score = 0;
        foreach (range(1, self::FRAMES_PER_GAME) as $frame){

        }
        return $score;
    }
}