<?php

namespace BrainGames\Game\ProgressionGame;

use function BrainGames\Engine\game;

function progressionGame(): void
{
    $condition = 'What number is missing in the progression?';
    game('progression', $condition);
}
