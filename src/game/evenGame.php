<?php

namespace BrainGames\Game\EvenGame;

use function BrainGames\Engine\game;

function evenGame(): void
{
    $condition = 'Answer "yes" if the number is even, otherwise answer "no".';
    game('even', $condition, ['yes', 'no']);
}
