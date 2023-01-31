<?php

namespace BrainGames\Game\PrimeGame;

use function BrainGames\Engine\game;

function primeGame(): void
{
    $condition = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    game('prime', $condition, ['yes', 'no']);
}
