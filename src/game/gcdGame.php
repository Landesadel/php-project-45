<?php

namespace BrainGames\Game\GcdGame;

use function BrainGames\Engine\game;

function gcdGame(): void
{
    $condition = 'Find the greatest common divisor of given numbers.';
    game('gcd', $condition);
}
