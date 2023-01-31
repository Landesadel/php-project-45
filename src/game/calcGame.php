<?php

namespace BrainGames\Game\CalcGame;

use function BrainGames\Engine\game;

function calcGame(): void
{
    $condition = 'What is the result of the expression?';

    game('calc', $condition, ['*', '+', '-']);
}
